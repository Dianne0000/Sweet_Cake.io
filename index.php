<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>

    <!-- header section start here  -->
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="logo.png" alt=""></a>
            <h1 class="logoName">Sweet Cake </h1>
        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#product">product</a>
            <a href="#blogs">blogs</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Delicious Sweet Cake for Everyone </h2>
            <p>“I want people to fall in love with themselves and 
                to be really proud and full of joy for the space 
                they take up. If someone else appreciates the space
                 you take up, then that’s icing on the cake.” — Jonathan Van Ness</p>
            <div class="home-btn">
                <a href="#"><button>see more</button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <section class="product" id="product">
        <div class="heading">
            <h2>Our Exclusive Products</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake1.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Vegan</h3>
                        <p>This delicious biscoff cheesecake 
                            features a buttery biscoff cookie crust,
                             and creamy filling. 
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake2.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Chocolate</h3><br>
                        <p>a sweet baked food made from a dough or
                             thick batter and a raising agent.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake3.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Chocolate</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa adipisci reiciendis assumenda.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake4.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Strawberry</h3><br>
                        <p>Strawberry cake is a cake that
                            <br>
                            
                             uses strawberry as a primary ingredient. 
                        
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake5.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Blue berry</h3>
                        <p>is bursting with soft and sweet blueberries that are sandwiched
                            and a cinnamon flavored streusel.
                             
                            
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake6.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Raspberry</h3>
                        <p>It's made with four layers of <br>
                            luscious raspberry filling, and rich in cream cheese.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake7.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Lime Pie</h3><br>
                        <p>Soft and fluffy matcha chiffon cake
                            <br> frosted with light matcha whipped cream.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="cake8.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Christmas</h3><br>
                        <p>a traditional fruit cake with a rich,
                             velvety texture that's so full flavoured and moist.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- product section end here  -->

    <!-- blogs section start here  -->
    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="blog-img1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Strawberry Buttercream Cupcakes </h3>
                        <p>are moist, tender and totally addicting! 
                            There are pieces of chopped strawberry in the 
                            cupcake and they are topped with strawberry buttercream! 
                            So much flavor and perfect for spring and summer!
                        </p>
                        <p>There’s plenty of strawberry flavor from the chunks
                            of berries and then they are topped with a delicious
                             strawberry buttercream.  </p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="blog-img2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Caramel Bourbon Vanilla Cupcakes </h3>
                        <p>are perfectly moist, and completely irresistible!  
                            Light and fluffy cupcakes are spiked with bourbon 
                            and swirled with creamy vanilla buttercream for the
                            ultimate dessert.</p>
                        <p>a brown sugar bourbon cupcake topped with caramel 
                            vanilla frosting for a unique combination that
                             is full of flavor! </p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="blog-img2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Caramel Bourbon Vanilla Cupcakes </h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorum voluptatum
                            corporis accusamus aperiam fugiat tempora blanditiis labore dolor aliquid maxime nobis
                            laborum sed soluta voluptatibus aspernatur natus, dicta quisquam.</p>
                        <p>a brown sugar bourbon cupcake topped with caramel 
                            vanilla frosting for a unique combination that is full of flavor!</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>


        </div>
    </section>

    <!-- blogs section ends here  -->

    <!-- newsletter section start here  -->

    <section class="newsletter">
        <form action="">
            <h3>subscribe for latest update</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="button" value="subscribe" class="box2">
        </form>
    </section>
    <!-- newsletter section ends here  -->

    <!-- review section start here  -->
    <section class="review" id="review">
        <div class="heading">
            <h2>client review</h2>
        </div>


        <div class=" swiper review-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>Wow! Super cute place with amazing pastries. 
                            The staff was also super nice and welcoming.
                            Definitely recommend a trip!</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="client1.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hardy Devid</h3>
                            <p>Customer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review"><br>
                        <br>
                        <p>Go get these cakes and various cupcakes.
                            You will not be disappointed as they are the best.
                           </p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="client2.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Hailey Smith</h3>
                            <p>Customer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review"><br>
                        <br>
                        <p>Such a gem! Not only are the staff and cakes incredible,
                            you can’t beat the prices and supporting local!</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="client3.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Samantha Perez</h3>
                            <p>Customer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review"><br>
                        <br>
                        <br>
                        <p> Excellent selection of donuts, pastries and cupcakes.
                             If you love sweet treats, you need to visit.</p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="client4.jpg" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Bryle Standford</h3>
                            <p>Customer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <!-- review section ends here  -->

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <a href="#"><img src="logo.png" alt=""></a>
                    <h1 class="logoName"> Sweet Cake </h1>
                </div>

                <p>Explore our amazing and delicious cake and send it as a gift 
                    to greet your loved ones!</p>

            </div>
            <div class="box">
                <h3>Quick link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Home</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>product</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>blogs</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>review</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>contact</a>

            </div>
            <div class="box">
                <h3>Extra link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Account info</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>order item</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>payment method</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>our  services</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+91 12222 34444</a>
                <a href="#"> <i class="fas fa-envelope"></i>sweetcake@gmail.com</a>

            </div>

        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
        <div class="credit">
            Created by <span>Group 4</span> |All Rights Reserved! 
        </div>
    </footer>










    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="index.js"></script>
</body>
</html>