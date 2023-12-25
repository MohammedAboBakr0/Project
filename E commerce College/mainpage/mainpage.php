<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

?>
<?php
//echo$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alive</title>
    <link rel="stylesheet" href="./mainPage.css" />

    <link rel="stylesheet" href="../login and signup form/all.min.css">

    <link rel="website icon" href="./alivelogo.webp" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <div class="container">
            <div class="main">
                <!--  logo of the page  -->
                <div class="logo">
                    <a href="./mainpage.php">
                        <img src="./alivelogo.webp" alt="logo">
                    </a>
                </div>

                <!-- search bar -->
                <div class="search">
                    <span><i class='bx bx-search-alt-2'></i></span>
                    <input type="text" placeholder="Search for a product" />
                    <span>All Categories</span>
                </div>


                <div class="btns">
                    <a href="profile/profile.php"><i class='bx bx-user'></i></a>
                    <a href="cart/cart.html"><i class='bx bxs-shopping-bag'></i></a>
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
                    <li><a href="mainpage.php">home</a></li>
                    <li><a href="">pages</a></li>
                    <li><a href="profile/profile.php">user account</a></li>
                    <li><a href="">vendor account</a></li>
                    <li><a href="">track my order</a></li>
                    <li><a href="">contact</a></li>
                </ul>

            </div>
        </div>
    </header>


    <!-- landing -->

    <div class="landing">
        <div class="container">
            <ul class="types">
                <li><a href="categories/categories.php"><span><i class='bx bxs-t-shirt'></i></span>fashion</a></li>
                <li><a href="categories/categories.php"><span><i class='bx bx-laptop'></i></span>electronics</a></li>
                <li><a href="categories/categories.php"><span><i class='bx bxs-leaf'></i></span>home and garden</a></li>
                <li><a href="categories/categories.php"><span><i class='bx bxs-gift'></i></span>gifts</a></li>
                <li><a href="categories/categories.php"><span><i class='bx bx-health'></i></span>health and beauty</a>
                </li>
                <li><a href="categories/categories.php"><span><i class='bx bxs-cheese'></i></span>groceries</a></li>
                <li><a href="categories/categories.php"><span><i class='bx bxs-book'></i></span>books</a></li>
            </ul>

            <div class="slides">
                <div class="slider" id="slider">


                </div>
                <div class="bullets">

                </div>
            </div>


        </div>
    </div>

    <div class="trending">
        <div class="container">
            <div class="title">
                <h2>trending products</h2>
                <span><i class='bx bxs-hot'></i></span>
            </div>
            <div class="prods">

                <div class="prod">


                    <div class="image">
                        <img src="main page images/3db8465ae5c8845947b9b23578588639.jpg" alt="">
                    </div>


                    <div class="text">

                        <div class="name">
                            <h2>addidas shoes</h2>
                            <i class='bx bxs-bookmark-star'></i>
                        </div>


                        <div class="info">
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                                expedita.</p>
                            <p class="price">199.99 <span></span></p>
                        </div>


                        <div class="btns">
                            <button class="add" id="add">add product</button>
                            <button class="show" id="show">show product</button>
                        </div>


                    </div>
                </div>
                <div class="prod">


                    <div class="image">
                        <img src="main page images/3db8465ae5c8845947b9b23578588639.jpg" alt="">
                    </div>


                    <div class="text">

                        <div class="name">
                            <h2>addidas shoes</h2>
                            <i class='bx bxs-bookmark-star'></i>
                        </div>


                        <div class="info">
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                                expedita.</p>
                            <p class="price">199.99 <span></span></p>
                        </div>


                        <div class="btns">
                            <button class="add" id="add">add product</button>
                            <button class="show" id="show">show product</button>
                        </div>


                    </div>
                </div>
                <div class="prod">


                    <div class="image">
                        <img src="main page images/3db8465ae5c8845947b9b23578588639.jpg" alt="">
                    </div>


                    <div class="text">

                        <div class="name">
                            <h2>addidas shoes</h2>
                            <i class='bx bxs-bookmark-star'></i>
                        </div>


                        <div class="info">
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                                expedita.</p>
                            <p class="price">199.99 <span><i class='bx bxs-dollar-circle'></i></span></p>
                        </div>


                        <div class="btns">
                            <button class="add" id="add">add product</button>
                            <button class="show" id="show">show product</button>
                        </div>


                    </div>
                </div>

                <div class="prod">


                    <div class="image">
                        <img src="main page images/3db8465ae5c8845947b9b23578588639.jpg" alt="">
                    </div>


                    <div class="text">

                        <div class="name">
                            <h2>addidas shoes</h2>
                            <i class='bx bxs-bookmark-star'></i>
                        </div>


                        <div class="info">
                            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt,
                                expedita.</p>
                            <p class="price">199.99 <span></span></p>
                        </div>


                        <div class="btns">
                            <button class="add" id="add">add product</button>
                            <button class="show" id="show">show product</button>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="top-categories">
        <div class="container">
            <div class="title">
                <span><i class='bx bx-library'></i></span>
                <h2>top Categories</h2>
            </div>
            <ul class="categories">
                <li><a href="">
                        <div class="image">
                            <img src="main page images/1946.jpg" alt="">
                        </div>
                    </a></li>
                <li><a href="">
                        <div class="image">
                            <img src="main page images/The-Lifestyle-TV-Fest-Banner-2.jpg" alt="">
                        </div>
                    </a></li>
                <li><a href="">
                        <div class="image">
                            <img src="main page images/BLACK_FRIDAY_COUPON_Mesa_de_trabajo_1.jpg" alt="">
                        </div>
                    </a></li>

            </ul>
        </div>
    </div>


    <div class="newprods">
        <div class="container">
            <div class="title">
                <span><i class='bx bx-calendar-exclamation'></i></span>
                <h2>new arrivals</h2>
            </div>
            <div class="samples">


                <div class="sample">
                    <div class="image">
                        <img src="main page images/1877.jpg" alt="">
                    </div>
                    <h4>name</h4>
                    <p>150</p>
                </div>
                <div class="sample">
                    <div class="image">
                        <img src="main page images/3db8465ae5c8845947b9b23578588639.jpg" alt="">
                    </div>
                    <h4>name</h4>
                    <p>150</p>
                </div>
                <div class="sample">
                    <div class="image">
                        <img src="main page images/284.jpg" alt="">
                    </div>
                    <h4>name</h4>
                    <p>150</p>
                </div>
                <div class="sample">
                    <div class="image">
                        <img src="main page images/2204_w018_n001_957b_p15_957.jpg" alt="">
                    </div>
                    <h4>name</h4>
                    <p>150</p>
                </div>
                <div class="sample">
                    <div class="image">
                        <img src="main page images/BLACK_FRIDAY_COUPON_Mesa_de_trabajo_1.jpg" alt="">
                    </div>
                    <h4>name</h4>
                    <p>150</p>
                </div>


            </div>
        </div>
    </div>

    <div class="images">
        <div class="container">
            <div class="image">
                <img src="main page images/The-Lifestyle-TV-Fest-Banner-2.jpg" alt="">
            </div>
            <div class="image">
                <img src="main page images/BLACK_FRIDAY_COUPON_Mesa_de_trabajo_1.jpg" alt="">
            </div>
        </div>
    </div>



    <div class="footer">
        <div class="container">
            <div class="left">
                <img src="alivelogo.webp" alt="">
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
<script src="./main.js"></script>

</html>