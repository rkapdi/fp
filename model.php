<?php

$conn = mysqli_connect('localhost', 'f3rkapdi', 'f3rkapdi136', 'C354_f3rkapdi');


/**
 * Searches for politicians in the database based on the given search term.
 *
 * @param string $searchTerm The search term provided by the user.
 * @return array An array of search results.
 */
function searchPoliticians($search) {
    global $conn;

    // Add wildcard characters to the search term
    $search = "%" . $search . "%";

    // Prepare a SQL statement to search for politicians
    $sql = "SELECT p_name, Country, Position, Party, Details
    FROM Politicians_project WHERE p_name LIKE '$search' OR
    Country LIKE '$search' OR Position LIKE '$search' OR
    Party LIKE '$search' OR Details LIKE '$search'";
    $result = mysqli_query($conn, $sql);
    // Check if a matching record exists
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return $result;
    }

    // // Prepare the statement
    // $stmt = mysqli_prepare($conn, $sql);

    // // Bind the search term to the prepared statement
    // mysqli_stmt_bind_param($stmt, "sssss", $search, $search, $search, $search, $search);

    // // Execute the statement
    // mysqli_stmt_execute($stmt);

    // // Get the result
    // $result = mysqli_stmt_get_result($stmt);

    // // Fetch all rows from the result set and return them as an array
    // $resultsArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // return $resultsArray;
}



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
    $sql = "SELECT * FROM Users_project WHERE Username='$u'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
        return true;
    else
        return false;
}


/**
 * Signs up a new user by inserting their information into the database.
 *
 * @param string $u The username of the new user.
 * @param string $p The password of the new user.
 * @param string $e The email address of the new user.
 * @return bool True if the user is successfully signed up, false otherwise.
 */
function signup_user($u, $p) {
    global $conn;

    if (user_exists($u))
        return false;

    $d = date('Ymd');
    $sql = "insert into Users_project values (NULL,'$u', '$p', NULL, $d)";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>




