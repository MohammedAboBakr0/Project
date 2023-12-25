<?php
$db = new PDO("mysql:host=localhost;dbname=products;", "root", "");
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$email = $_SESSION['email'];
$getdata = $db->prepare("SELECT * FROM customer WHERE email='$email'");
$getdata->execute();
foreach ($getdata as $result) {
    $phone = $result['phone'];
    $gender = $result['gender'];
    $date = $result['birthdate'];
    $address = $result['address'];
}
if (isset($_POST['logout'])){
    require("logout.php");
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="profile.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <div class="container">
            <div class="main">
                <!--  logo of the page  -->
                <div class="logo">
                    <a href="../mainpage.php">
                        <img src="../alivelogo.webp" alt="logo">
                    </a>
                </div>

                <!-- search bar -->
                <div class="search">
                    <span><i class='bx bx-search-alt-2'></i></span>
                    <input type="text" placeholder="Search for a product" />
                    <span>All Categories</span>
                </div>


                <div class="btns">
                    <a href="profile.html"><i class='bx bx-user'></i></a>
                    <a href="../cart/cart.html"><i class='bx bxs-shopping-bag'></i></a>
                </div>

            </div>



            <div class="sub">
                <div class="category">
                    <i class='bx bx-library'></i>
                    <select>
                        <option value="none" disabled hidden selected>Category</option>
                        <option>two</option>
                        <option>three</option>
                        <option>four</option>
                    </select>
                </div>

                <!-- links -->
                <ul class="links">
                    <li><a href="">home</a></li>
                    <li><a href="">pages</a></li>
                    <li><a href="./loginandsignupform/index.html">user account</a></li>
                    <li><a href="">vendor account</a></li>
                    <li><a href="">track my order</a></li>
                    <li><a href="">contact</a></li>
                </ul>

            </div>
        </div>
    </header>



    <div class="profile">
        <div class="container">
            <div class="image">
                <img <?php if ($gender == "Male") { ?> src="maleprofile.jpg" <?php } else { ?> src="femaleprofile.jpg"
                    <?php } ?> alt="">
            </div>

            <?php

            echo <<<"here"
                <div class="data">
                <div class="head">
                    <h2 class="name">
                        $username
                    </h2>
                    <p class="report"><i class='bx bx-calendar-exclamation' ></i>report user</p>
                    <a href="editprofile/editprofile.php"><i class='bx bxs-edit'></i>edit profile</a>
                </div>

                <div class="body">
                    <p>phone number: <span>+0 $phone<span></p>
                    <p>address: <span>$address<span></p>
                    <p>Email: <span>$email</span></p>
                    <p>Gender: <span>$gender<span></p>
                    <p>birthday: <span>$date</span></p>
                </div>


                </div>
            here;

            ?>
            <form method="post">
                <input type="submit" name="logout" value="logout" />
            </form>
        </div>
    </div>


    <div class="footer">
        <div class="container">
            <div class="left">
                <img src="../alivelogo.webp" alt="">
            </div>
            <div class="right">
                <div class="link">
                    <i class='bx bxl-facebook'></i>
                </div>
                <div class="link">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="link">
                    <i class='bx bxl-twitter'></i>
                </div>
            </div>
        </div>
    </div>
</body>

</html>