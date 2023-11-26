<!DOCTYPE html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

        body {
            overflow-x: hidden;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }

        /* Toggle Styles */
        #viewport {
            padding-left: 250px;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #content {
            width: 100%;
            position: relative;
            margin-right: 0;
        }

        /* Sidebar Styles */
        #sidebar {
            z-index: 1000;
            position: fixed;
            left: 250px;
            width: 250px;
            height: 100%;
            margin-left: -250px;
            /* overflow-y: auto; */
            background: #37474F;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #sidebar header {
            background-color: #263238;
            font-size: 20px;
            line-height: 52px;
            text-align: center;
        }

        #sidebar header a {
            color: #fff;
            display: block;
            text-decoration: none;
        }

        #sidebar header a:hover {
            color: #fff;
        }

        #sidebar .nav {}

        #sidebar .nav a {
            background: none;
            border-bottom: 1px solid #455A64;
            color: #CFD8DC;
            font-size: 14px;
            padding: 16px 24px;
        }

        #sidebar .nav a:hover {
            background: none;
            color: #ECEFF1;
        }

        /* Add this style for the sign-out button */
        #signout-btn {
            margin-top: auto;
            /* Push the button to the bottom */
            padding: 16px 24px;
            text-align: center;
            background-color: #FF0000;
            /* Red background color */
            color: #FFFFFF;
            /* White text color */
            font-weight: bold;
            cursor: pointer;
        }

        #signout-btn:hover {
            background-color: #CC0000;
            /* Darker red on hover */
        }

        #sidebar .nav a i {
            margin-right: 16px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
            <header>
                <a href="#">PolitiFace</a>
            </header>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-view-dashboard"></i> Stats
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-link"></i> Favourites
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-calendar"></i> Browse Politicians
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-settings"></i> Contribute New Data
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="zmdi zmdi-comment-more"></i> Account Management
                    </a>
                </li>
            </ul>
            <div class="mt-auto"></div>
            <!-- Add a margin-top spacer to push the button to the bottom -->
            <!-- Sign-out button -->
            <button type="button" id="signout-btn" class="btn btn-light btn-block">Sign Out</button>
        </div>
        <!-- Content -->
        <div id="content">
            <nav class="navbar navbar-default">
                <div class="container-fluid" style="background-color: lightGrey;">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><i class="zmdi zmdi-notifications text-danger"></i></a>
                        </li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <h1>Account Management</h1>
                <div class="container-fluid" style="padding: 20px;">
                    <div class="row">

                        <div class="col-md-3 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" width="150px"
                                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                <span class="text-black-50"></span>
                                <span></span>
                                <!-- This line had an extra space, I removed it -->
                            </div>
                            <br>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                    type="button">Update Profile Photo</button></div>
                        </div>

                        <div class="col-md-5 border-right">
                            <div class="mt-3">
                                <form action="controller.php" method="post">
                                    <div class="form-group row">
                                        <label for="newUsername" class="col-md-6 col-form-label">Change User Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="newUsername"
                                                name="newUsername" placeholder="Enter new username" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="newEmail" class="col-md-6 col-form-label">Change Email ID</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="newEmail" name="newEmail"
                                                placeholder="Enter new email id" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="newPassword" class="col-md-6 col-form-label">Change Password</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" id="newPassword"
                                                name="newPassword" placeholder="New Password" value="">
                                        </div>
                                    </div>

                                    <div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-primary">Save Profile</button>
                                        <button type="button" class="btn btn-danger profile-button">Delete Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- This column is currently commented out, but it should work fine when uncommented -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('signout-btn').addEventListener('click', function () {
            // Create an XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Define the URL to load
            var url = 'view_startpage.php'; // Replace with the correct URL

            // Configure the request
            xhr.open('GET', url, true);

            // Set up the callback function for a successful response
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Replace the content of the current page with the response content
                    document.body.innerHTML = xhr.responseText;
                } else {
                    // Handle errors here
                    alert('Error loading view_signin.php');
                }
            };

            // Send the request
            xhr.send();
        });

    </script>
</body>

</html>
