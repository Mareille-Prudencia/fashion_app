<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FashionKids | Ecommerce Website Design</title>

    <link rel="stylesheet" href="CSS/style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info py-3 fixed-top">
    <a href="#" class="fa fa-shopping-bag nav-item nav-link text-dark"><b>FashionKids.</b></a>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggler="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fa fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="style.php">Style</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-search" id="search-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-heart"></i>
                        <span class="badge rounded-pill bg-danger position-absolute translate-middle">5+</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i href="#" class="fa fa-shopping-cart"></i>
                        <span class="badge rounded-pill bg-danger position-absolute translate-middle">8+</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

/* account page */

<div class="container p-5 mt-5 bg-dark">
    <div class="row">
        <div class="col-lg-5">
            <div>
                <img src="images/bac.jpg" alt="Login" width="400" height="380">
            </div>
        </div>
        <div class="col-lg-7">
            <div class="text-center">
                <h4 class="text-white m-3 p-3">Create an Account</h4>
            </div>
            <form action="handle_registration.php" method="post">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <input class="form-control rounded-pill" type="text" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control rounded-pill" type="text" name="secondName" placeholder="Second Name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div>
                        <input class="form-control rounded-pill" type="email" name="emailAddress" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <input class="form-control rounded-pill" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control rounded-pill" type="password" name="confirmPass" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <input type="submit" name="register" class= "rounded-pill btn btn-warning" value="Register">
                </div>
            </form>
            <hr>


            <div class="text-center">
                <a class="small" href="">Forgot password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="login_form.php">Already have an account? Login</a>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
