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
            <h1 class="text-decoration-none text-white fs-2 fw-bold">PolitiFace</h1>
        </div>
    </header>
    
    <div class="d-flex min-vh-100" lc-helper="background" style="background:url('../images/hero.jpg')  center / cover no-repeat; background-color:#444; background-blend-mode: overlay;">
        <div class="align-self-center text-center text-light col-md-8 offset-md-2">
            <div class="lc-block mb-4">
                <div editable="rich">
                    <h2>SIGN IN</h2>
                </div>
            </div>

            <!-- Sign In Form -->
            <div class="container-lg">
                <form method="POST" action="controller.php">
                    <!-- Hidden Inputs -->
                    <input type="hidden" name="page" value="signin">
                    <input type="hidden" name="command" value="SignIn">

                    <!-- Email Input -->
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="username">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">PASSWORD</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="password">
                        </div>
                    </div>

                    <!-- Sign In Button -->
                    <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                </form>
            </div>
            
            <div class="lc-block">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
