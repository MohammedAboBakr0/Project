<?php
$db = new PDO("mysql: host=localhost; dbname=products", "root", "");



if (isset($_POST["fashion"])) {
    $sql = $db->prepare("SELECT * FROM product WHERE category = 'fashion'");
    $sql->execute();
} elseif (isset($_POST["electronics"])) {
    $sql = $db->prepare("SELECT * FROM product WHERE category = 'electronics'");
    $sql->execute();
} elseif (isset($_POST["home"])) {
    $sql = $db->prepare("SELECT * FROM product WHERE category = 'home and garden'");
    $sql->execute();
} elseif (isset($_POST["gifts"])) {
    $sql = $db->prepare("SELECT * FROM product WHERE category = 'gifts'");
    $sql->execute();
} elseif (isset($_POST["health"])) {
    $sql = $db->prepare("SELECT * FROM product WHERE category = 'health and beauty'");
    $sql->execute();
} elseif (isset($_POST["groceries"])) {
    $sql = $db->prepare("SELECT * FROM product WHERE category = 'groceries'");
    $sql->execute();
} elseif (isset($_POST["books"])) {
    $sql = $db->prepare("SELECT * FROM product WHERE category = 'books'");
    $sql->execute();
} elseif (isset($_POST["all"])) {
    $sql = $db->prepare("SELECT * FROM product");
    $sql->execute();
} else {
    $sql = $db->prepare("SELECT * FROM product");
    $sql->execute();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="categories.css">
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
                    <a href="profile/profile.html"><i class='bx bx-user'></i></a>
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
                    <li><a href="../mainpage.php">home</a></li>
                    <li><a href="">pages</a></li>
                    <li><a href="profile/profile.html">user account</a></li>
                    <li><a href="">vendor account</a></li>
                    <li><a href="">track my order</a></li>
                    <li><a href="">contact</a></li>
                </ul>

            </div>
        </div>
    </header>







    <div class="content">
        <div class="container">
            <ul class="types">
                <form method="post">
                    <li>
                        <button name=fashion><span><i class='bx bxs-t-shirt'></i></span>fashion</a>
                    </li>
                </form>
                <form method="post">
                    <li>
                        <button name=electronics><span><i class='bx bx-laptop'></i></span>electronics</a>
                    </li>
                </form>
                <form method="post">
                    <li>
                        <button name=home><span><i class='bx bxs-leaf'></i></span>home and garden</a>
                    </li>
                </form>
                <form method="post">
                    <li>
                        <button name=gifts><span><i class='bx bxs-gift'></i></span>gifts</a>
                    </li>
                </form>
                <form method="post">
                    <li>
                        <button name=health><span><i class='bx bx-health'></i></span>health and beauty</a>
                    </li>
                </form>
                <form method="post">
                    <li>
                        <button name=groceries><span><i class='bx bxs-cheese'></i></span>groceries</a>
                    </li>
                </form>
                <form method="post">
                    <li>
                        <button name=books><span><i class='bx bxs-book'></i></span>books</a>
                    </li>
                </form>
                <form method="post">
                    <li>
                        <button name=all><span><i class='bx bx-basket'></i></span>all categories</a>
                    </li>
                </form>
            </ul>

            <div class="products">

                <?php
                foreach ($sql as $result) {

                    $image = "data:" . $result['image_type'] . ";base64," . base64_encode($result['image_data']);
                    echo <<<"here"
                    <div class="prod" id="$result[id]">


                    <div class="image">
                        <img src="$image" alt="" class="image$result[id]">
                    </div>
                    
                    
                    <div class="text">
                    
                        <div class="name">
                            <h2 id="prodName$result[id]">$result[name]</h2>
                            <i class='bx bxs-bookmark-star' ></i>
                        </div>
                    
                    
                        <div class="info">
                            <p class="description" id="prodDescription$result[id]">$result[description]</p>
                            <p class="price" id="prodPrice$result[id]">$result[price]<span><i class='bx bxs-dollar-circle'></i></span></p>
                        </div> 
                        
                        
                        <div class="btns">
                            <button class="add" id="add" value='$result[id]'>add product</button>
                            <button  class="show" id="show">show product</button>
                        </div>
                    
                    
                    </div>
                    </div>


                    here;
                }
                ?>


            </div>
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

<script src="./add.js"></script>

</html>