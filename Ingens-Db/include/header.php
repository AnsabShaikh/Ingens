<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="hr management, staff requirement" />
    <meta name="description" content="Website For Staffing Solution" />
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--    <link rel="stylesheet" href="../css/stellarnav.css">-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<!--    <!-- required -->
<!--    <style>-->
<!--        /* styles for this sample only */-->
<!--        *{ margin: 0; padding: 0; }-->
<!--        body { height: 300px; font-size: 16px; font-family: 'Exo 2', sans-serif; background:; color: #555; }-->
<!--        .header { text-align: center; }-->
<!--        .header a { padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; }-->
<!--        /*.header p { margin: 10px 0 40px 0; font-size: 18px; }*/-->
<!--        .p1{-->
<!--            padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; margin: 10px 0 40px 0-->
<!--        }-->
<!--        .container { max-width: 1200px; margin: 0 auto; }-->
<!--        @media only screen and (max-width : 900px) {-->
<!--            .stellarnav > ul > li > a { padding: 20px 23px; }-->
<!--        }-->
<!--        /* styles for this sample only */-->
<!--    </style>-->
    <style type="text/css">
        @media (min-width: 1000px){
            .dropdown-menu .dropdown-toggle:after{
                border-top: .3em solid transparent;
                border-right: 0;
                border-bottom: .3em solid transparent;
                border-left: .3em solid;
            }

            .dropdown-menu .dropdown-menu{
                margin-left:0; margin-right: 0;
            }

            .dropdown-menu li{
                position: relative;
            }
            .nav-item .submenu{
                display: none;
                position: absolute;
                left:100%; top:-7px;
            }
            .nav-item .submenu-left{
                right:100%; left:auto;
            }

            .dropdown-menu > li:hover{ background-color: #f1f1f1 }
            .dropdown-menu > li:hover > .submenu{
                display: block;
            }
        }
    </style>
</head>


<!--<body class="bg-light">-->

<!--<header class="section-header py-4">-->
<!--    <div class="container">-->
<!--        <h2>Demo page</h2>-->
<!--    </div>-->
<!--</header> <!-- section-header.// -->

<!-- ========================= SECTION CONTENT ========================= -->

<!--<div class="container">-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<!--        <a class="navbar-brand" href="#">Brand</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">

            <ul class="navbar-nav">
                <?php
                $arr = explode("/",$_SERVER['REQUEST_URI']);
                $uri = end($arr);
                ?>
                <li class="nav-item "> <a class="nav-link" <?php if($uri == 'index.php') echo "class = 'active' style='color:gold'"; else echo "style='color: white;'";?> href="index.php">Home </a></li>
                <li class="nav-item"><a class="nav-link"<?php if($uri == 'about_us.php') echo "class = 'active' style='color:gold'"; else echo "style='color: white;'";?> href="about_us.php">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" href="#" data-toggle="dropdown"> Services </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">HR Services &raquo </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="">Staffing Solutions &raquo </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" <?php if($uri == 'permanent.php') echo "class = 'active' style='color:gold'";?>href="permanent.php">Permanent Recruitment</a></li>
                                        <li><a class="dropdown-item" <?php if($uri == 'contract.php') echo "class = 'active' style='color:gold'";?> href="contract.php">Contract Staffing</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" <?php if($uri == 'payroll.php') echo "class = 'active' style='color:gold'";?>href="payroll.php">Payroll-Monthly Payroll Services</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="#">IT Services &raquo </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" <?php if($uri == 'web.php') echo "class = 'active' style='color:gold'";?>href="web.php">Website Designing</a></li>
                                <li><a class="dropdown-item" <?php if($uri == 'gaming.php') echo "class = 'active' style='color:gold'";?> href="gaming.php">Gaming Solutions</a></li>
                                <li><a class="dropdown-item" <?php if($uri == 'product.php') echo "class = 'active' style='color:gold'";?>href="product.php">Product Development</a></li>
                                <li><a class="dropdown-item" <?php if($uri == 'staff.php') echo "class = 'active' style='color:gold'";?>href="staff.php">Staffing Solutions</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" <?php if($uri == 'industry.php') echo "class = 'active' style='color:gold;'"; else echo"style='color: white;'";?>href="industry.php">Industrial Practices</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" href="#" data-toggle="dropdown"> Careers </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" <?php if($uri == 'hot_jobs.php') echo "class = 'active' style='color:gold'";?>href="hot_jobs.php">Hot Jobs</a></li>
                        <li><a class="dropdown-item" <?php if($uri == 'career_at.php') echo "class = 'active' style='color:gold'";?>href="career_at.php">Career at Ingens</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" <?php if($uri == 'contact_us.php') echo "class = 'active' style='color:gold'"; else echo"style='color: white;'";?>href="contact_us.php">Contact Us</a></li>
            </ul>

        </div>
        <!-- navbar-collapse.// -->

    </nav>


<!--<body>-->

<!--<div class="stellarnav">-->
<!--    <ul>-->
<!--        --><?php
//        $arr = explode("/",$_SERVER['REQUEST_URI']);
//        $uri = end($arr);
//        ?>
<!--        <li><a --><?php //if($uri == 'index.php') echo "class = 'active' style='background-color:blue'";?><!-- href="index.php">Home</a></li>-->
<!--        <li><a --><?php //if($uri == 'about_us.php') echo "class = 'active' style='background-color:blue'";?><!-- href="about_us.php">About Us</a></li>-->
<!---->
<!--        <li><a href="#">Services</a>-->
<!--            <ul>-->
<!--                <li><a href="#">HR Services</a>-->
<!--                    <ul>-->
<!--                        <li><a href="#">Staffing Solutions</a>-->
<!--                            <ul>-->
<!--                                <li><a --><?php //if($uri == 'permanent.php') echo "class = 'active' style='background-color:blue'";?><!-- href="permanent.php">Permanent Recruitment</a>-->
<!--                                </li>-->
<!--                                <li><a --><?php //if($uri == 'contract.php') echo "class = 'active' style='background-color:blue'";?><!-- href="contract.php">Contract Staffing</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a --><?php //if($uri == 'payroll.php') echo "class = 'active' style='background-color:blue'";?><!-- href="payroll.php">Payroll-Monthly Payroll Services</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="#">IT Services</a>-->
<!--                    <ul>-->
<!--                        <li><a --><?php //if($uri == 'web.php') echo "class = 'active' style='background-color:blue'";?><!-- href="web.php">Website Designing</a>-->
<!--                        </li>-->
<!--                        <li><a --><?php //if($uri == 'gaming.php') echo "class = 'active' style='background-color:blue'";?><!-- href="gaming.php">Gaming Solutions</a>-->
<!--                        </li>-->
<!--                        <li><a --><?php //if($uri == 'product.php') echo "class = 'active' style='background-color:blue'";?><!-- href="product.php">Product Development</a>-->
<!--                        </li>-->
<!--                        <li><a --><?php //if($uri == 'staff.php') echo "class = 'active' style='background-color:blue'";?><!-- href="staff.php">Staffing Solutions <br>-->
<!--                                (Staff Augmentation)</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!---->
<!--        <li><a --><?php //if($uri == 'industry.php') echo "class = 'active' style='background-color:blue'";?><!-- href="industry.php">Industrial Practices</a></li>-->
<!--        <li><a href="#">Careers</a>-->
<!--            <ul>-->
<!--                <li><a --><?php //if($uri == 'hot_jobs.php') echo "class = 'active' style='background-color:blue'";?><!-- href="hot_jobs.php">Hot Jobs</a>-->
<!--                </li>-->
<!--                <li><a --><?php //if($uri == 'career_at.php') echo "class = 'active' style='background-color:blue'";?><!-- href="career_at.php">Career at Ingens</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a --><?php //if($uri == 'contact_us.php') echo "class = 'active' style='background-color:blue'";?><!-- href="contact_us.php">Contact Us</a></li>-->
<!--<!--        <li><a href="">XML</a></li>-->
<!--<!--        <li class="drop-left"><a href="">Drop Left</a>-->
<!--<!--            <ul>-->
<!--<!--                <li><a href="#">Bootstrap?</a>-->
<!--<!--                    <ul>-->
<!--<!--                        <li><a href="#">Menu</a>-->
<!--<!--                            <ul>-->
<!--<!--                                <li><a href="#">navbar</a></li>-->
<!--<!--                                <li><a href="#">tabs</a></li>-->
<!--<!--                                <li><a href="#">pills</a></li>-->
<!--<!--                            </ul>-->
<!--<!--                        </li>-->
<!--<!--                        <li><a href="#">table</a></li>-->
<!--<!--                        <li><a href="#">Carousel</a></li>-->
<!--<!--                    </ul>-->
<!--<!--                </li>-->
<!--<!--                <li><a href="#">Frameworks</a></li>-->
<!--<!---->
<!--<!--            </ul>-->
<!--<!--        </li>-->
<!---->
<!--</div>-->
<!-- .stellarnav -->

<!--<script type='text/javascript' src='../js/jquery-3.4.1.min.js'></script>-->
<!--<script type="text/javascript" src="../js/stellarnav.min.js"></script>-->
<!--<script type="text/javascript">-->
<!--    jQuery(document).ready(function($) {-->
<!--        jQuery('.stellarnav').stellarNav({-->
<!--            theme: 'dark'-->
<!--        });-->
<!--    });-->
<!--</script>-->
<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>

<script type="text/javascript">
    /// some script

    // jquery ready start
    $(document).ready(function() {
        // jQuery code

        //////////////////////// Prevent closing from click inside dropdown
        $(document).on('click', '.dropdown-menu', function (e) {
            e.stopPropagation();
        });

        // make it as accordion for smaller screens
        if ($(window).width() < 1000) {
            $('.dropdown-menu a').click(function(e){
                e.preventDefault();
                if($(this).next('.submenu').length){
                    $(this).next('.submenu').toggle();
                }
                $('.dropdown').on('hide.bs.dropdown', function () {
                    $(this).find('.submenu').hide();
                })
            });
        }

    }); // jquery end
</script>
<!--</body>-->
</html>
