<?php
include('model.php');
include('view_signin.php');


$page = $_POST['page'];

// Check which page is being accessed
if ($page == 'signin') {
    $command = $_POST['command'];

    // Handle different commands
    switch ($command) {
        case 'SignIn':
            echo ("XXX");
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
        default:
            echo "Unknown Command.";
    }
} else {
    // Handle other pages or commands
    echo "Page not found.";
    exit;
}
?>
