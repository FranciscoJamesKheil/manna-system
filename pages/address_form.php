<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manna | Address Form</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="../stylesheet/address.css">
    <link rel="stylesheet" href="../stylesheet/main.css">
    <link rel="stylesheet" href="../stylesheet/footer.css">
    <link rel="stylesheet" href="../stylesheet/header.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- animte on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- manna icon -->
    <link rel="icon" href="../assets/logo/logo.png" sizes="10x10">

    <!--font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
</head>
<body>
    <!-- ============ Header / Nav =========== -->
    <div class="header_bg">
        <img src="../assets/img/header.png" id="header" alt="">
    </div>
    <header>
        <div class="logo">
            <a href="../home.php">
                <img src="../assets/logo/logo_transparent.png" alt="">
            </a>
        </div>
        <ul id="pro_ul">
            <li> <input type="text" placeholder="Search"></li>
            <li><i class="fa fa-bell"></i></li>
            <li><i class="far fa-user-circle"></i></li>
        </ul>
    </header>

    <br>
    
    <div class="container">
        <div class="address_box">
            <div class="left">
                <div class="delivery_address">
                    <div class="icon_circle">
                        <i class="far fa-location"></i>
                    </div>
                    <p>Delivery Address</p>
                    <div class="delivery_address_info">
                        <div class="info_">
                            <p>Abby Quintos</p>
                            <p>(+63) 9456517431</p>
                            <p>Quintos Drive, Zone V Divisoria, Zamboanga City</p>
                        </div>
                        <div class="info_">
                            <p>Abby Quintos</p>
                            <p>(+63) 9456517431</p>
                            <p>Quintos Drive, Zone V Divisoria, Zamboanga City</p>
                        </div>
                        <div class="info_add">
                            <i class="fa fa-plus-circle"></i>
                            <p>Add address</p>
                        </div>
                    </div>
                </div>
                <div class="order_summary">
                    <div class="icon_circle">
                        <i class="far fa-location"></i>
                    </div>
                    <p>Order Summary</p>
                    <div class="box">
                        <div class="product_box">
                            <div class="product_circle"></div>
                        </div>
                        <div class="product_info">
                            <p>Cream Bread 120g</p>
                            <p>40 pcs.</p>
                            <p>1,580.00</p>
                        </div>
                    </div>
                </div>
                <div class="payment_details">
                    <div class="icon_circle">
                        <i class="far fa-location"></i>
                    </div>
                    <p>Payment Details</p>
                    
                    <form action="#">
                        <input type="radio" id="cod" name="payment_method" value="Cash on Delivery">
                        <label for="cod">Cash on Delivery</label><br>
                        <input type="radio" id="bt" name="payment_method" value="Bank Transfer">
                        <label for="bt">Bank Transfer</label>
                    </form>
                </div>
            </div>
            <div class="right">
                <b>Order Details</b>
                <div class="total_box">
                    <div class="pair_box">
                        <p>Price</p>
                        <p>PHP. 1,580.00</p>
                    </div>
                    <div class="pair_box">
                        <p>Delivery Fee</p>
                        <p>Free</p>
                    </div>
                    <div class="pair_box">
                        <p>Discount</p>
                        <p>580.00</p>
                    </div>
                    <hr>
                    <div class="pair_box">
                        <p>Total Amount</p>
                        <p>PHP 1,000.00</p>
                    </div>
                </div>
                <div class="btn_total">
                    <button>Place Order</button>
                </div>

            </div>
        </div>
    </div>

    <br>
    
    <!-- ============== FOOTER =============== -->
    <footer data-aos="fade-up">
        <div class="footer_left">
            <h2>Mannafest Food Inc.</h2>
            <br>
            <p>One of the leading company that 
                <br>
                provides the best quality of bread in town</p>
            <br>
            <br>
            <p id="footer_p_location">Sapphire St.,
                <br>
                Santiago Rd.,
                <br>
                Lumbangan, Divisoria
                <br>
                Zamboanga City, Philippines 7000
                Contact Us: 062-926-1993
                <br>
                Email: mannafest_zam@yahoo.co</p>
                <br>
                <br>
                <p>Follow Us</p>
                <img id="fol_us" src="../assets/logo/facebook.png" alt="">
                <img id="fol_us" src="../assets/logo/instagram.png" alt="">
                <br>
                <br>
                <br>
                <br>
            <p id="copyright">Copyright &copy 2022 Mannafest Food Incorporated, All Rights Reserve</p>
        </div>
        <div class="footer_middle">
            <ul>
                <li><a href="">About Us</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Return Policy</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
        <div class="footer_right">
            <h2>We love to it hear from you!</h2>
            <br>
            <form action="">
                <div class="div_name_email">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                </div>
                <div class="feedback">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your feedback"></textarea>
                </div>
                <center>
                    <button type="submit" id="feedback_submit">SUBMIT</button>
                </center>
            </form>
        </div>
    </footer>
    
    <!-- animate on scroll script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init(); //initializing script animate on scroll
    </script>
</body>
</html>