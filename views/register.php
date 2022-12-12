<?php
include_once('../server.php') ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Registration Page
    </title>
    <link href=".././resources/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 register">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-primary">Sign up</p>

                                    <form class="mx-1 mx-md-4 " action="./register.php" method="post">
                                        <?php
                                       
                                        if (isset($success) && $success == true) {
                                            header('Location:./login.php');
                                        }
                                        

                                        ?>
                                        
                                        <?php if (isset($error_msg)): ?>
                                      
                                        <span class="error"><?php echo $error_msg ?></span>
                                       
                                        <?php unset($error_msg) ?>

                                       <?php endif ?>
                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" placeholder="user" name="username">
                                               
                                                <span class="error" id="username_err"> </span>

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="user@user.com" name="email">
                                                <span class="error" id="email_err"> </span>
                                                
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password">
                                                <span class="error" id="password_err"> </span>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg" name="reg_btn" id="reg">Register</button>
                                        </div>

                                    </form>
                                    <p>
                                        Have an account?
                                        <a href="./login.php">
                                            Click here to login!
                                        </a>
                                    </p>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src=".././resources/images/Login.jpg" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src=".././resources/js/jquery-3.6.1.min.js "></script>
    <script src=".././resources/js/script.js"></script>
</body>

</html>