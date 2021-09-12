<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/stellarnav.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- required -->
    <style>
        /* styles for this sample only */
        *{ margin: 0; padding: 0; }
        body { height: 300px; font-size: 16px; font-family: 'Exo 2', sans-serif; background:; color: #555; }
        .header { text-align: center; }
        .header a { padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; }
        /*.header p { margin: 10px 0 40px 0; font-size: 18px; }*/
        .p1{
            padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; margin: 10px 0 40px 0
        }
        .container { max-width: 1200px; margin: 0 auto; }
        @media only screen and (max-width : 900px) {
            .stellarnav > ul > li > a { padding: 20px 23px; }
        }
        /* styles for this sample only */
    </style>

</head>

<body>

<div class="stellarnav">
    <ul>
        <?php
        $arr = explode("/",$_SERVER['REQUEST_URI']);
        $uri = end($arr);
        ?>
        <li><a <?php if($uri == 'home.php') echo "class = 'active' style='background-color:blue'";?> href="home.php">Home</a></li>
        <li><a <?php if($uri == 'about_us.php') echo "class = 'active' style='background-color:blue'";?> href="about_us.php">About Us</a></li>

        <li><a href="#">Services</a>
            <ul>
                <li><a href="#">HR Services</a>
                    <ul>
                        <li><a href="#">Staffing Solutions</a>
                            <ul>
                                <li><a <?php if($uri == 'permanent.php') echo "class = 'active' style='background-color:blue'";?> href="permanent.php">Permanent Recruitment</a>
                                </li>
                                <li><a <?php if($uri == 'contract.php') echo "class = 'active' style='background-color:blue'";?> href="contract.php">Contract Staffing</a>
                                </li>
                            </ul>
                        </li>
                        <li><a <?php if($uri == 'payroll.php') echo "class = 'active' style='background-color:blue'";?> href="payroll.php">Payroll-Monthly Payroll Services</a></li>
                    </ul>
                </li>
                <li><a href="#">IT Services</a>
                    <ul>
                        <li><a <?php if($uri == 'web.php') echo "class = 'active' style='background-color:blue'";?> href="web.php">Website Designing</a>
                        </li>
                        <li><a <?php if($uri == 'gaming.php') echo "class = 'active' style='background-color:blue'";?> href="gaming.php">Gaming Solutions</a>
                        </li>
                        <li><a <?php if($uri == 'product.php') echo "class = 'active' style='background-color:blue'";?> href="product.php">Product Development</a>
                        </li>
                        <li><a <?php if($uri == 'staff.php') echo "class = 'active' style='background-color:blue'";?> href="staff.php">Staffing Solutions <br>
                                (Staff Augmentation)</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a <?php if($uri == 'industry.php') echo "class = 'active' style='background-color:blue'";?> href="industry.php">Industrial Practices</a></li>
        <li><a href="#">Careers</a>
            <ul>
                <li><a <?php if($uri == 'hot_jobs.php') echo "class = 'active' style='background-color:blue'";?> href="hot_jobs.php">Hot Jobs</a>
                </li>
                <li><a <?php if($uri == 'career_at.php') echo "class = 'active' style='background-color:blue'";?> href="career_at.php">Career at Ingens</a>
                </li>
            </ul>
        </li>
        <li><a <?php if($uri == 'contact_us.php') echo "class = 'active' style='background-color:blue'";?> href="contact_us.php">Contact Us</a></li>
        <li><a <?php if($uri == 'logout.php') echo "class = 'active' style='background-color:blue'";?> href="logout.php"><span class="fa fa-lock"></span></a>
<!--            <ul>-->
<!--                <li><a --><?php //if($uri == 'logout.php') echo "class = 'active' style='background-color:blue'";?><!-- href="logout.php">Logout</a>-->
<!--                </li>-->
<!--            </ul>-->
        </li>
</div>
<!-- .stellarnav -->

<script type='text/javascript' src='../js/jquery-3.4.1.min.js'></script>
<script type="text/javascript" src="../js/stellarnav.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        jQuery('.stellarnav').stellarNav({
            theme: 'dark'
        });
    });
</script>

</body>
</html>
