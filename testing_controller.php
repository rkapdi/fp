<?php
include('model.php');
include('view_startpage.php');


$page = $_POST['page'];

// Check which page is being accessed
if ($page == 'SignUp') {
    $command = $_POST['command'];

    // Handle different commands
    switch ($command) {
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
