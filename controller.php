<?php
// Include the model that contains database functions
include('model.php');

// Check if the 'page' parameter is empty
if (empty($_POST['page'])) {
    // echo "Debug: 'page' parameter is empty. Redirecting to view_startpage.php.";
    include('view_startpage.php');
    $_POST['page'] = "SignUp"; 
    exit;
}

// Check if $page was set
if (isset($page)) {
    // $page is set, do something with it
    echo "Debug: 'page' is set to '$page'.";
} else {
    // $page is not set
    echo "Debug: 'page' is not set.";
}


// Get the 'page' parameter from the POST request
$page = $_POST['page'];

// Check which page is being accessed
if ($page == 'signin') {
    $command = $_POST['command'];

    // Handle different commands
    switch ($command) {
        case 'SignIn':
            // Validate and sanitize user inputs
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            // Perform user authentication (replace with your authentication logic)
            $authenticated = user_valid($username, $password);

            if ($authenticated) {
                // User is authenticated, redirect to the main page
                include('view_mainpage.php');
                exit;
            } else {
                // Authentication failed, show an error message
                $error_message = 'Authentication failed. Please try again.';
                include('view_startpage.php');
                exit;
            }
            break;
        case 'SignUp':
            // Handle user registration
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            // Check if the user already exists
            if (user_exists($username)) {
                // User already exists, show an error message
                $error_message = 'Username already exists. Please choose a different username.';
                include('view_startpage.php');
                exit;
            }

            // Perform user registration
            $registered = signup_user($username, $password);

            if ($registered) {
                // Registration successful, redirect to a success page or login page
                // TODO: Print Message: Account Registered, Sign In Please.
                include('view_mainpage.php');
                exit;
            } else {
                // Registration failed, show an error message
                $error_message = 'Registration failed. Please try again.';
                include('view_startpage.php');
                exit;
            }
            break;
        default:
            echo "Unknown Command.";
    }
} else {
    // Handle other pages or commands
    echo "Page not found.";
    exit;
}
?>
