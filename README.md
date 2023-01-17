# Form post handling

## What you'll learn
* Conditional rendering of HTML
* Handling a form post
* Validating form input
* Storing data in cookies
* Redirecting with PHP

## Introduction
In this exercise we have an existing form, and an empty post.php file where the form is posted to. You will need to handle the post, validate the input and use the outcome to change what is displayed on the webpage.

## Before you start

### 1. Starting your ddev instance
Make sure you have a working [DDEV installation](https://ddev.readthedocs.io/en/stable/)

### 2. Starting your ddev instance
Start your DDEV instance using the following command:
```shell
ddev start
```

### 3. Visit the website
You should now be able to access your project on https://bootcamp-php.ddev.site/

## The problem
We created a form in our index.php file so users can leave their email address. However we don't have any logic in place to handle the posting of the form. This is where you step in!

We want you to write the logic to handle the form post action (we already created an empty post.php file for this). We need the email address to be validated, and want to show a thank you message if the form was successfuly processed.
If there was an error we would like to let the user know so they can retry.

## The solution
To solve this use the empty post.php file to handle the form post. Make sure you:
1. Validate the input, this should be a valid email address.
2. If an error occurs, display it on the form (eg. "Please provide a valid email address")
3. If the post was successful let the user know by replacing the form with a "Thank you" message

## Validating changes
To validate the changes you will first check https://bootcamp-php.ddev.site/. Does everything look ok there? Great! Now you can create a Pull Request and ask your Buddy to review the changes you've made. To do this follow these steps:

** 1. First checkout a new branch **
Be sure to replace {your-name} with your actual name (eg. m.swinkels)
```shell
git checkout -b {your-name}/exercise/form-post-handling
```

** 2. Add all your changes so you can push them to the repository **
```shell
git add *
```

** 3. Commit your changes **
```shell
git commit -m "Created logic to handle form response"
```

** 3. Push your changes to the repository **
Be sure to replace {your-name} with your actual name like you did in step 1.
```shell
git push --set-upstream origin {your-name}/exercise/form-post-handling
```

** 3. Create the Pull Request
You can use the URL below to create a PR (Pull Request) for your changes. Be sure to replace {your-name} in the URL with your actual name like you did in step 1 and 2.
https://source.youwe.nl/projects/BCMP/repos/basic-php/pull-requests?create&sourceBranch=refs/heads/{your-name}/exercise/form-post-handling&targetBranch=refs/heads/exercises/level-1/form-post-handling

## Tips and tricks
* You can use cookies to store the form state (success, fail, error messages etc.)
* [Post superglobal (predefined variables)](https://www.php.net/manual/en/reserved.variables.post.php)
* [Cookie superglobal (predefined variables)](https://www.php.net/manual/en/reserved.variables.cookies.php)
* [setcookie() function](https://www.php.net/manual/en/function.setcookie)
* [filter_var() function](https://www.php.net/manual/en/function.filter-var)
* [Post/Redirect/Get (PRG) pattern](https://www.geeksforgeeks.org/post-redirect-get-prg-design-pattern/)

