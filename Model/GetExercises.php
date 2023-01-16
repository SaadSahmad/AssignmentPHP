<?php
declare(strict_types=1);

namespace Bootcamp\Model;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use JsonException;

class GetExercises
{
    private const EXERCISE_BASE_URL = 'https://source.youwe.nl/projects/BCMP/repos/basic-php/browse';
    private const API_URL = 'https://source.youwe.nl/rest/api/latest/projects/BCMP/repos/basic-php/branches';
    private const ENV_KEY = 'SOURCE_BEARER_TOKEN';
    private const EXERCISE_BRANCH_PATTERN = '~exercise/(?<level>level-[0-9])/(?<name>.+)~';

    /**
     * @return string[]
     */
    public function execute(): array
    {
        $exercises = [];
        $branches = $this->getAvailableBranches();
        if (empty($branches)) {
            return $exercises;
        }

        foreach ($branches as $branchName) {
            $matches = [];
            if (preg_match(self::EXERCISE_BRANCH_PATTERN, $branchName, $matches)) {
                $exercises[$matches['level']][$matches['name']] = self::EXERCISE_BASE_URL . '?at=refs/heads/' . $branchName;
            }
        }

        return $exercises;
    }

    /**
     * @param string $bearerToken
     * @return array
     */
    private function getRequestOptions(string $bearerToken): array
    {
        return [
            'headers' => [ 'Authorization' => 'Bearer ' . $bearerToken ],
        ];
    }

    /**
     * @return array
     */
    private function getAvailableBranches(): array
    {
        $branches = [];
        $bearerToken = $_ENV[self::ENV_KEY] ?? null;

        if (!$bearerToken) {
            return $branches;
        }

        $guzzleClient = new Client();
        try {
            $response = $guzzleClient->get(
                self::API_URL,
                $this->getRequestOptions($bearerToken)
            );
        } catch (GuzzleException $e) {
            return $branches;
        }

        try {
            $branchesData = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            return $branches;
        }

        foreach ($branchesData['values'] as $branchData) {
            $branchName = $branchData['displayId'];
            if (str_starts_with($branchName, self::EXERCISE_BRANCH_PATTERN)) {
                $branches[] = $branchData['displayId'];
            }
        }

        return $branches;
    }
}