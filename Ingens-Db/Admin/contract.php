<?php
session_start();

if(!$_SESSION['username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingens</title>
    <link rel="stylesheet" href="css/stellarnav.css"/>
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js'></script>-->

    <style>

        /*body {*/
        /*background-color:#434A53;*/
        /*color:#fff;*/
        /*}*/
        /*.container {*/
        /*margin:150px auto;*/
        /*width: 480px;*/
        /*text-align:center;*/
        /*}*/
        .item {
            /*float:left;*/
            /*background-color: lavender;*/
            opacity:0;
            /*-webkit-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*-moz-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21)*/
        }
        .word {
            /*float:left;*/
            /*background-color: lavender;*/
            opacity:0;
            /*-webkit-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*-moz-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21)*/
        }
        .letter {
            /*float:left;*/
            /*background-color: lavender;*/
            opacity:0;
            /*-webkit-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*-moz-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21)*/
        }
        .call{
            width: 38px;
            text-align: center;
            font-size:20px;
            background-color: #3b5998;
            color: white;
            padding: 10px;
            border-radius: 100%;
        }

        .parallax1 {
            /* The image used */
            /*background-image: url("images/c5.jpg");*/

            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .parallax2 {
            /* The image used */
            background-color: lightblue;

            /* Set a specific height */
            min-height: 200px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /*.icon{*/
        /*width: 38px;*/
        /*text-align: center;*/
        /*font-size:20px;*/
        /*background-color: #3b5998;*/
        /*color: white;*/
        /*padding: 10px;*/
        /*border-radius: 100%;*/
        /*}*/
        /*.icon1{*/
        /*margin-left: 20px;*/
        /*width: 38px;*/
        /*text-align: center;*/
        /*font-size:20px;*/
        /*background-color: #55ACEE;*/
        /*color: white;*/
        /*padding: 10px;*/
        /*border-radius: 100%;*/
        /*}*/
        /*.icon2{*/
        /*margin-left: 20px;*/
        /*width: 38px;*/
        /*text-align: center;*/
        /*font-size:20px;*/
        /*background-color: #dd4b39;*/
        /*color: white;*/
        /*padding: 10px;*/
        /*border-radius: 100%;*/
        /*}*/
        /*.icon3{*/
        /*margin-left: 20px;*/
        /*width: 38px;*/
        /*text-align: center;*/
        /*font-size:20px;*/
        /*background-color: #007bb5;*/
        /*color: white;*/
        /*padding: 10px;*/
        /*border-radius: 100%;*/
        /*}*/
        .m{
            margin-top: 10px;
        }
        .r{
            width: 100%;
            height: 100%;
        }
        .sl{
            /*width: 1250px;*/
            height: 300px
        }
        /* styles for this sample only */
        *{ margin: 0; padding: 0; }
        body { height: 3200px; width: 100% font-size: 16px; font-family: 'Exo 2', sans-serif; background: azure; color: #555; }
        .header { text-align: center; }
        .header a { padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; }
        /*.header p { margin: 10px 0 40px 0; font-size: 18px; }*/
        .p1{
            display: block; font-size: 48px; text-decoration: none; color: #555; margin: 10px 0 40px 0
        }
        .container { max-width: 1200px; margin: 0 auto; }
        @media only screen and (max-width : 1000px) {
            .stellarnav > ul > li > a { padding: 20px 23px; }
        }
        /* styles for this sample only */
    </style>

</head>
<!--<div class="header">-->
<?php
include"include/heading.php";
?>

<?php
include"include/header.php";
?>
<!--</div>-->
<body style="background-color: azure">

<p class="fixed-bottom" style="margin-left: 1300px">
    <a href="#t"><span class="fa fa-angle-double-up" style="color: red"></span></a>
</p>
<div class="item">
    <h1 class="text-center" style="color: mediumblue">Contract Staffing</h1>
</div>
    <div class="container">
     <div class="item">
        <div class="row">
            <div class="col-sm-6">
                <ul>
                    <li>
                        <h3>
                            Short-term solutions for long-term goals
                        </h3>
                    </li>
                    <p style="color: black;font-size: 20px">
                        In today's business environment, a variety of staffing solutions are relied upon by organizations to meet their growing needs.
                        Cyclical growth often requires specialized external resources to partner with existing staff. We have the ability to contract a
                        wide range of professionals and take advantage of the many benefits a contract staffing solution offers.
                    </p>
                    <li>
                        <h3>
                            We help you save time
                        </h3>
                    </li>
                    <p style="color: black;font-size: 20px">
                        Most of our recruiters come from the industry in which they recruit. Working within one of the largest networks and armed
                        with our proven recruitment approach, they quickly deliver experienced talent ready to make an immediate impact on your
                        business.
                    </p>
            </div>
<!--            <div class="col-sm-3"></div>-->

            <div class="col-sm-3">
                <img src="../Ignes/Page%20Images/Staffing.jpg" style="height: 400px;width: 500px" alt="">
            </div>

        </div>
     </div>
        <div class="item">
            <ul>
                <li>
                    <h3>
                        Short-term solutions for long-term goals
                    </h3>
                </li>
                <p style="color: black;font-size: 20px">
                    In today's business environment, a variety of staffing solutions are relied upon by organizations to meet their growing needs.
                    Cyclical growth often requires specialized external resources to partner with existing staff. We have the ability to contract a
                    wide range of professionals and take advantage of the many benefits a contract staffing solution offers.
                </p>

                <li>
                <h3>
                    We help you save time
                </h3>
                </li>
                <p style="color: black;font-size: 20px">
                    Most of our recruiters come from the industry in which they recruit. Working within one of the largest networks and armed
                    with our proven recruitment approach, they quickly deliver experienced talent ready to make an immediate impact on your
                    business.
                </p>
                <li>
                    <h3>
                        We help you find the right Talent
                    </h3>
                </li>
                <p style="color: black;font-size: 20px">
                    Whatever your current needs, we've got the ability and capacity to take on the challenge. We have access to highly-skilled
                    professionals from a broad spectrum of disciplines - IT, accounting & finance, ITES-BPO, engineering, production/manufacturing,
                    IT Hardware and Networking are a few of the industries we specialize in. You may have a complex or multiple staffing need.
                    We can assemble entire teams to tackle the assignment as needed.
                </p>
                <p style="color: black;font-size: 20px">
                    We welcome the opportunity to explain how Ingens contract staffing services operate and to demonstrate how we
                    customize a solution to meet your specific needs
                </p>
            </ul>
<!--            <a href="contact_us.php" class="btn btn-outline-danger" style="color: black; margin-left: 1000px;margin-bottom: 10px">Apply Now</a>-->
        </div>

    </div>

    </div>
    <br><br>
<div class="parallax2">
    <?php
    include 'include/footer.php'
    ?>
</div>
<script type='text/javascript' src='js_files/jquery-3.4.1.min.js'></script>
<script src="new_plugins/plugin/jQuery-Plugin-For-Scroll-triggered-Fade-In-Effect-fadeInElements-js/fadeInElements.js"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js_files/stellarnav.min.js"></script>
<script src="plugins/jquery.sliphover.min.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
<script src="fadeInElements.js"></script>
<script>
    jQuery(document).ready(function($) {
        $('.stellarnav').stellarNav({
            theme: 'dark'
        });
    });

    $('#hello').sliphover();
    $('.item').fadeInElements({
        fadeDuration: 3000,
        fadePosition: 25
//        fadeIn:left

    });
    //    $('.word').fadeInElements({
    //        fadeDuration: 3000,
    //        fadePosition: 25,
    //        fadeIn:left
    //    });
    //    $('.letter').fadeInElements({
    //        fadeDuration: 3000,
    //        fadePosition: 25
    //    });

</script>

</body>
</html>