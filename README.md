# Bootcamp - Basic PHP

## What is this?
This Bootcamp repository can be used to practice basic PHP skills. Different exercises can be found in each branch.

If you're seeing this, that means you are currently on the master branch (the default branch for this repository).
Feel free to `git checkout` any other branch, and take a look at it's README.md file for instructions.

## Prerequisites
- A working [DDEV installation](https://ddev.readthedocs.io/en/stable/)

## Installation
To run this locally please follow the following steps:

### 1. Starting your ddev instance
Start your DDEV instance using the following command:
```shell
ddev start
```

### 2. Starting your ddev instance
Run composer install to install required packages:
```shell
ddev composer install
```

### 3. Visit the website
You should now be able to access your demo store on https://bootcamp-php.ddev.site/

## Creating an exercise
Want to create an exercise? Follow these steps:

### 1. Checkout the exercise template branch:
```shell
git checkout exercise-template
```

### 2. Create a new exercise branch
To create an exercise use the following branching pattern: `exercise/level-{EXERCISE_LEVEL}/{EXERCISE_NAME}`

Where `{EXERCISE_LEVEL}` is replaced with an integer indicating the difficulty of the exercise:

| Level | Description                                                                                                                                                    |
|-------|----------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1     | The most basic exercises. Entry level knowledge.                                                                                                               |
| 2     | Basic exercises that are good for junior developers getting used ot working with PHP.                                                                          |
| 3     | Slightly more challenging exercises that are good for junior developers that have a good basic understanding of PHP.                                           |
| 4     | More advanced exercises that leave more room for freedom, and offer a good challenge for junior developers that have a solid understanding of PHP.             |
| 5     | Advanced exercises that test the knowledge and problem solving abilities of a junior developer that is getting to the point where they can work independently. |

And `{EXERCISE_NAME}` is replaced by a descriptive kebab-case representation of what the exercise is about.

For example a simple exercise for string concatenation would be names
```shell
git checkout -b exercise/level-1/string-concatenation
```

### 3. Update the README.md file
Change the contents of the README.md file to explain the exercise

### 4. Prepare the exercise and push your changes
Update and/or change any code that should be available at the start of the exercise. Once done you can push your changes to origin, and the exercise will be available.

```shell
git push --set-upstream origin exercise/level-1/string-concatenation
```
