<?php

// Check if the 'page' parameter is empty
if (empty($_POST['page'])) {
    // echo "Debug: 'page' parameter is empty. Redirecting to view_startpage.php.";
    include('view_startpage.php');
    exit;
}

// Include the model that contains database functions
include('model.php');

// Get the 'page' parameter from the POST request
$page = $_POST['page'];

// Check which page is being accessed
if ($page == 'start'){
    $command = $_POST['command'];
     switch ($command) {
        case 'SignUp':
            // Handle user registration
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check if the user already exists
            if (user_exists($username)) {
                // User already exists, show an error message
                $error_message = 'Username already exists. Please choose a different username.';
                echo $error_message;
                include('view_startpage.php');
                exit;
            }

            // Perform user registration
            $registered = signup_user($username, $password);

            if ($registered) {
                // Registration successful, redirect to a success page or login page
                // TODO: Print Message: Account Registered, Sign In Please.
                include('view_signin.php');
            } else {
                // Registration failed, show an error message
                $error_message = 'Registration failed. Please try again.';
                include('view_startpage.php');
            }
        break;
        case 'SignOut':

        break;
    }

} else if ($page == 'SignIn') {
     $command = $_POST['command'];

    // Validate and sanitize user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform user authentication (replace with your authentication logic)
    $authenticated = user_valid($username, $password);

    if ($authenticated) {
        // User is authenticated, redirect to the main page
        include('view_mainpage.php');
    } else {
        // Authentication failed, show an error message
        $error_message = 'Authentication failed. Please try again.';
        include('view_startpage.php');
    }
}

else{
    // Handle other pages or commands
    echo "Page not found.";
    exit;
}
?>
