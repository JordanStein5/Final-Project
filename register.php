<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py=3 fixed-top">
        <div class="container">
            <img class="logo" src="assets/imgs/Randomlogo1.png" />
            <h2 class="brand">Orange</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="a">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="a">Contact us</a>
                    </li>

                    <li class="nav-item">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                        <i class="fa-solid fa-user"></i>
                    </li>




                </ul>


            </div>
        </div>
    </nav>


    <!--Register-->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Register</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="register-form">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <label>ConfirmPassword</label>
                    <input type="password" class="form-control" id="register-confirm-password" name="confirm password" placeholder="ConfirmPassword" required/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" id="register-btn" value="Register" />
                </div>
                <div class="form-group">
                    <a id="login-url" class="btn">Do you have an account? Login</a>></a>
                </div>
            </form>
        </div>
    </section>




     <!--Footer-->
     <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img class="logo" src="assets/imgs/Randomlogo1.png" />
                <p class="pt-3">We provide the best products for the most affordable prices</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase">
                    <li><a href="#">men</a></li>
                    <li><a href="#">woman</a></li>
                    <li><a href="#">boys</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">new arrivals</a></li>
                    <li><a href="#">clothes</a></li>
                </ul>
            </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>1234 Street Name, City</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>123 456 7890</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>info@email.com</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img src="assets/imgs/featured1.jpeg" class="img-fluid w-25 h-100" />
                    <img src="assets/imgs/featured2.jpeg" class="img-fluid w-25 h-100" />
                    <img src="assets/imgs/featured3.jpeg" class="img-fluid w-25 h-100" />
                    <img src="assets/imgs/featured4.jpeg" class="img-fluid w-25 h-100" />
                    <img src="assets/imgs/Tech4.5.jpeg" class="img-fluid w-25 h-100" />
                </div>
            </div>
        </div>


        <div class="copyright mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <img src="assets/imgs/payment1.png" />
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
                    <p>eCommerce @ 2025 All Right Reserved</p>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>