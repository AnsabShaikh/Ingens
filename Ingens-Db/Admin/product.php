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
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js'></script>-->

    <style>
        .m{
            margin-top: 10px;
        }
        .r{
            width: 100%;
            height: 100%;
        }
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
            /*background-image: url("images/w2.jpg");*/

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
<body bgcolor="#f0ffff">

<p class="fixed-bottom" style="margin-left: 1300px">
    <a href="#t"><span class="fa fa-angle-double-up" style="color: red"></span></a>
</p>
<br>
<div class="item">
    <h1 class="text-center" style="color: mediumblue">Product Development</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p style="color: black;font-size: 22px" class="text-justify">
                    We offer full range of web development services to deliver latest industry trends and
                    quality-driven successful implementation of end-to-end web solutions. Custom Web
                    Development, Web Application Development, UI/UX Designing and Development,
                    Enterprise Portal Development, eCommerce Solutions, Content Management Systems
                    are some of our forte.
                </p>
                <p style="color: black;font-size: 20px" class="text-justify">
                    We offer full range of web development services to deliver latest industry trends and
                    quality-driven successful implementation of end-to-end web solutions. Custom Web
                    Development, Web Application Development, UI/UX Designing and Development,
                </p>
            </div>
            <div class="col-sm-3">
                <img src="../Ignes/Page%20Images/product.jpg" style="height: 400px;width: 500px" alt="">
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="item">
        <p style="color: black;font-size: 20px" class="text-justify">
            We offer full range of web development services to deliver latest industry trends and
            quality-driven successful implementation of end-to-end web solutions. Custom Web
            Development, Web Application Development, UI/UX Designing and Development,
            Enterprise Portal Development, eCommerce Solutions, Content Management Systems
            are some of our forte.
        </p>
        <p style="color: black;font-size: 20px" class="text-justify">
            It does not need to be complicated. Our rockstar team works to create products that are
            result oriented, simple to use, cost effective and goal driven. We have the domain
            expertise, technical experience, profound knowledge and the tools to turn your idea
            into a reality. So, while we take care of the web, you run your business. Your visitors will
            love it!
        </p>
    </div>
</div>
<div class="container">
    <div class="item">
        <div class="row">
<!--            <div class="col-sm-12">-->
<!--                <p style="font-size: 28px;color: red" class="text-center">-->
<!--                    <strong>Our Approach</strong>-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-sm-3">-->
<!--                    <h6 style="font-size: 32px;color: indianred">-->
<!--                        DISCOVERY AND RESEARCH-->
<!--                    </h6>-->
<!--                    <p style="color: black;font-size: 20px" class="text-justify">-->
<!--                        We analyze, evaluate and-->
<!--                        engage with you to help us-->
<!--                        understand you and your-->
<!--                        business requirements better.-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="col-sm-3">-->
<!--                    <h6 style="font-size: 32px;color: indianred">-->
<!--                        PLAN AND STRATEGIZE-->
<!--                    </h6>-->
<!--                    <p style="color: black;font-size: 20px" class="text-justify">-->
<!--                        We use insights, inspirations and-->
<!--                        information to set up aproject-->
<!--                        development path in sync with your-->
<!--                        budget and time constraints.-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="col-sm-3">-->
<!--                    <h6 style="font-size: 32px;padding-bottom:10px;color: indianred">-->
<!--                        DESIGN-->
<!--                    </h6>-->
<!--                    <br>-->
<!--                    <p style="color: black;font-size: 20px" class="text-justify">-->
<!--                        Every minute detail is pondered over to help-->
<!--                        craft an experience worth cherishing right from-->
<!--                        wireframes to working prototypes.-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="col-sm-3">-->
<!--                    <h6 style="font-size: 32px;padding-bottom:10px;color: indianred">-->
<!--                        DEVELOP-->
<!--                    </h6>-->
<!--                    <br>-->
<!--                    <p style="color: black;font-size: 20px" class="text-justify">-->
<!--                        This is where we apply our technical wizardry-->
<!--                        which helps create quality and well tested-->
<!--                        solutions that your customers will love.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
            <a href="contact_us.php" class="btn btn-outline-danger" style="color: black; margin-left: 1000px;margin-bottom: 10px">Apply Now</a>
        </div>
    </div>

</div>
</div>
</div>
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