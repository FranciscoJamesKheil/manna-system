<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manna | Orders</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="../../stylesheet/orders.css">
    <link rel="stylesheet" href="../../stylesheet/main.css">
    <link rel="stylesheet" href="../../stylesheet/footer.css">
    <link rel="stylesheet" href="../../stylesheet/header.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- animte on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- manna icon -->
    <link rel="icon" href="../../assets/logo/logo.png" sizes="10x10">

    <!--font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
</head>
<body>
    <!-- ============ Header / Nav =========== -->
    <div class="header_bg">
        <img src="../../assets/img/header.png" id="header" alt="">
    </div>
    <header>
        <div class="logo">
            <a href="../../home.php">
                <img src="../../assets/logo/logo_transparent.png" alt="">
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
        <div class="box">
            <div class="side_nav">
                <ul class="nav_outer">
          
                    <a href="dashboard.php">
                        <li><i class="far fa-user"></i> Dashboard</li>
                    </a>
                    <a href="orders.php">
                        <li id="active_section"><i class="fa fa-list"></i> Orders</li>
                    </a>
                    <a href="items.php">
                        <li><i class="far fa-sitemap"></i> Items</li>
                    </a>
                    <a href="user_accounts.php">
                        <li><i class="fa fa-users"></i> User Accounts</li>
                    </a>
                </ul>
            </div>
            
            <!-- stylesheet unlocated header to avoid conflict design w/ bootstrap -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
            

            <div class="my_profile">
                <h3>Orders</h3>
                <br>
                <button type="button" id="add_new"><i class="fa fa-plus-circle"></i> New</button>
                <div class="overflow-x">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Order ID</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Customer Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button><i class="far fa-eye"></i></button>
                                    <button><i class="far fa-edit"></i></button>
                                    <button><i class="far fa-trash"></i></button>
                                </td>
                                <td>MN2022-02-000001</td>
                                <td>100</td>
                                <td>150.00</td>
                                <td>Abby Quintos</td>
                            </tr>
                            <tr>
                                <td>
                                    <button><i class="far fa-eye"></i></button>
                                    <button><i class="far fa-edit"></i></button>
                                    <button><i class="far fa-trash"></i></button>
                                </td>
                                <td>MN2022-02-000002</td>
                                <td>100</td>
                                <td>150.00</td>
                                <td>Abby Quintos</td>
                            </tr>
                            <tr>
                                <td>
                                    <button><i class="far fa-eye"></i></button>
                                    <button><i class="far fa-edit"></i></button>
                                    <button><i class="far fa-trash"></i></button>
                                </td>
                                <td>MN2022-02-000003</td>
                                <td>100</td>
                                <td>150.00</td>
                                <td>Abby Quintos</td>
                            </tr>
                            <tr>
                                <td>
                                    <button><i class="far fa-eye"></i></button>
                                    <button><i class="far fa-edit"></i></button>
                                    <button><i class="far fa-trash"></i></button>
                                </td>
                                <td>MN2022-02-000004</td>
                                <td>100</td>
                                <td>150.00</td>
                                <td>Abby Quintos</td>
                            </tr>
                            <tr>
                                <td>
                                    <button><i class="far fa-eye"></i></button>
                                    <button><i class="far fa-edit"></i></button>
                                    <button><i class="far fa-trash"></i></button>
                                </td>
                                <td>MN2022-02-000005</td>
                                <td>100</td>
                                <td>150.00</td>
                                <td>Abby Quintos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
                
                
                <script>
                    $(document).ready(function () {
                        $('#example').DataTable();
                    });
                </script>
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
                <img id="fol_us" src="../../assets/logo/facebook.png" alt="">
                <img id="fol_us" src="../../assets/logo/instagram.png" alt="">
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