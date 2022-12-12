<?php
 include("../control.php")
 ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        User
    </title>
    <link href=".././resources/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php include('./layout/navbar.php'); ?>
    <section class="vh-100 register">
        <div class="container h-100">
            <div class="row d-flex justify-content-center p-2 h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div>
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-warning">the user</p>
                                    <?php
                                    if (isset($_POST['search'])&&(!empty($_REQUEST["term"]))) {
                                      
                                        $term = $_REQUEST["term"];
                                        
                                        if ($query = $db->query("SELECT * FROM users WHERE username LIKE '".$term . "%'")) {
                                            echo "<table class='table table-hover'>
                                            <thead>
                                                <tr>
                                                    <th scope='col'>id</th>
                                                    <th scope='col'>Username</th>
                                                    <th scope='col'>Email</th>
                                                </tr>
                                            </thead>";
    
                                            while ($row = $query->fetch_array()) {

                                                echo " <tbody>";
                                                echo "<tr>";
                                                echo "<td>" . $row['id'] . "</td>";
                                                echo "<td>" . $row['username'] . "</td>";
                                                echo "<td>" . $row['email'] . "</td>";
                                                echo "</tr>";
                                                echo " </tbody>";
                                            }
                                        } else {
                                            echo "<div>there is no user with<?php echo $term?> </div>";
                                        }
                                        echo " </table> ";
                                    }else{
                                        echo "<div class='text-center'>Please write the user you want to search </div>";
                                    }




                                    ?>
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