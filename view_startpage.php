<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolitiFace</title>

    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- Header -->
    <header class="header p-3 position-absolute start-0 top-0 end-0">
        <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="text-decoration-none text-white fs-2 fw-bold">PolitiFace</a>
            <button type="button" id="signin-btn" class="btn btn-danger btn-lg">Sign In</button>
        </div>
    </header>

    <div class="d-flex min-vh-100" lc-helper="background" style="background:url('../images/hero.jpg') center / cover no-repeat; background-color:#444; background-blend-mode: overlay;">
        <div class="align-self-center text-center text-light col-md-8 offset-md-2">
            <div class="lc-block mb-4">
                <div editable="rich">
                    <h1 class="display-4 fw-bolder">Master the names of politicians with ease</h1>
                </div>
            </div>

            <div class="lc-block">
                <div editable="rich">
                    <p class="lead" style="font-size: 34px;">Finally, Put a name to that face.</p>
                </div>
            </div>

            <!-- Register Form -->
            <div class="container-lg">
                <form action="controller.php" method="post">
                <input type="hidden" name="page" value="start">
                <input type="hidden" name="command" value="SignUp">


                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">USERNAME</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" name="username">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">PASSWORD</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                </form>
            </div>

            <div class="lc-block">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
document.getElementById('signin-btn').addEventListener('click', function() {
  // Create an XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Define the URL to load
  var url = 'view_signin.php'; // Replace with the correct URL

  // Configure the request
  xhr.open('GET', url, true);

  // Set up the callback function for a successful response
  xhr.onload = function() {
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
