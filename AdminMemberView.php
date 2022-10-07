<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            padding: 0;
            margin: 0px;
        }


        td {
            background: rgba(0, 0, 0, 0.6);
        }

        table,
        tr,
        th,
        td {
            border: 2px outset white;
            border-collapse: collapse;
            text-align: center;

            color: white;
            font-size: 18px;

        }

        tr,
        th {
            padding: 15px;


        }

        #ttt {
            padding-left: 80px;
            text-align: center;
            padding-right: 50px;
        }

        #tab::-webkit-scrollbar {
            display: none;
        }

        #tab {
            width: 1100px;
            height: 400px;
            order: scroll;
            overflow-x: auto;
            overflow-y: auto;
            margin-left: -1%;

        }

        .dy {
            padding-right: 50px;
        }

        #dy {
            padding-right: 25px;
            padding-left: 25px;
        }

        th {
            position: sticky;
            top: 0;
            background: rgba(0, 0, 0, 0.7);
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TimeTable</title>
    <link rel="icon" type="image/x-icon" href="assets/img/topLogo1.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styless.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php
    /*			session_start();
			if(isset($_SESSION["id"])){
				if((time()-$_SESSION['last_time'])>60){
					header('Location:logout.php');
				}
				else{
					$_SESSION['last_time'] = time() ;
				}
			}
			else{
				header('location:index.php') ;
			}
			*/
    ?>

    <?php include 'View\\view.php'; ?>
    <?php include 'ArraysFunctions\\arraysfunctions.php'; ?>
    <?php include 'Course\course.php'; ?>
    <?php include 'dbcon.php'; ?>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="admin.php" id='back1'>Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logout.php">Logout</a></li>
                    <script>
                        var position = "<?php echo $_SESSION['position'] ?>";
                        if (position == 'Student') {
                            var s1 = document.getElementById('back1');
                            s1.style.visibility = "hidden";
                        }
                    </script>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    


    <!-- Services-->
  <!-- ------------------------------------------------------------------------------------------------ -->
    <!-- Added code now -->

<header class="masthead" style="color: #000">
    <div class="container">
            <h2 align="center" style="margin-top: -15%; color: yello; ">
                Members
            </h2>
            <br>

   <table  id='viewtable' style="margin-left: 11%; margin-top: 6%; ">

      <tr id="headings" class="text-uppercase">
         <th>DID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>ID</th>
         <th>Position</th>
         <th>Registration Date</th>
        
      </tr>
      <?php

    //   $con = new mysqli('localhost', 'root', '', 'phone_book');
    //   if ($con->connect_error) {
    //      echo "couldn't connect";
    //      die();
    //   }


    //----------------------------------------------------------------

      include('dbcon.php');;
    //-----------------------------------------------------------------

      $sql = "select * from data";
      $result = $conn->query($sql);
      ?>

      <?php foreach ($result as $r) : ?>
         <tr>
            <td><?= $r['did'] ?></td>
            <td><?= $r['firstname'] ?></td>
            <td><?= $r['lastname'] ?></td>
            <td><?= $r['email'] ?></td>
            <td><?= $r['id'] ?></td>
            <td><?= $r['position'] ?></td>
            <td><?= $r['reg_date'] ?></td>
         </tr>
      <?php endforeach; ?>
   </table>
   </div>
</header>
    <!-------------------------------------------------------------------------------------------------  -->
    <br><br><br>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left"><a class="mr-3" href="#!">Copyright © Your Website 2020</a></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Modal 1-->



    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>