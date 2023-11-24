<?php

$conn = mysqli_connect('localhost', 'f3rkapdi', 'f3rkapdi136', 'C354_f3rkapdi');

/**
 * Validates a user by checking if a matching record exists in the database.
 *
 * @param string $u The username to check.
 * @param string $p The password to check.
 * @return bool True if a matching user is found, false otherwise.
 */
function user_valid($u, $p) {
    global $conn;
    // Prepare a SQL statement
    $sql = "SELECT * FROM Users_project WHERE Username='$u' AND Password='$p'";
    $result = mysqli_query($conn, $sql);

    // Check if a matching record exists
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * Checks if a user with the given username exists in the database.
 *
 * @param string $u The username to check.
 * @return bool True if the user exists, false otherwise.
 */
function user_exists($u) {
    global $conn;
    // Prepare a SQL statement with a placeholder for the username
    $sql = "SELECT * FROM Users_project WHERE Username=?";
    $stmt = mysqli_prepare($conn, $sql);
    // Bind the username to the prepared statement
    mysqli_stmt_bind_param($stmt, "s", $u);
    // Execute the statement and get the result
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Check if a matching record exists
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * Signs up a new user by inserting their information into the database.
 *
 * @param string $u The username of the new user.
 * @param string $p The password of the new user.
 * @param string $e The email address of the new user.
 * @return bool True if the user is successfully signed up, false otherwise.
 */
function signup_user($u, $p, $e) {
    global $conn;
    // Check if the user already exists
    if (user_exists($u)) {
        return false; // User already exists
    }

    // Get the current date
    $d = date('Ymd');
    // Prepare a SQL statement
    $sql = "INSERT INTO Users_project (Username, Password, Email, RegistrationDate) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    // Bind user inputs to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssi", $u, $p, $e, $d);
    // Execute the statement and get the result
    $result = mysqli_stmt_execute($stmt);

    return $result; // True if the user is successfully signed up, false otherwise
}

?>




