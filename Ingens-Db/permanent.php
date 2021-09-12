<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingens</title>
    <link rel="stylesheet" href="css/stellarnav.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <!--    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js'></script>-->

    <style>
        .item {
            /*float:left;*/
            /*background-color: lavender;*/
            opacity:0;
            /*-webkit-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*-moz-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21);*/
            /*box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21)*/
        }
        .i{
            height:100px;
            margin:30px
        }
        .im{
            background-color: lavender;
            width: 105%;
        }
        .t1{
            display: block;
            font-size: 62px;
            text-decoration: none;
            color:  #0069d9;
            margin: 40px 0px 40px 30px;
            font-family:'Josefin Sans'
        }
        .co{
            margin-left: 20px;
        }
        .up{
            margin-left: 1300px
        }
        .txt1{
            color: indigo
        }
        .txt2{
            color: black;
            font-size: 20px
        }
        .im1{
            height: 270px;
            width: 500px
        }
        .d{
            overflow-x: hidden;
        }
        .bt1{
            display: inline-block;
            font-weight: 400;
            /*color: #212529;*/
            margin-left: 1000px;
            margin-bottom: 10px
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #dc3545;
            border-color: #dc3545;
            border: 1px solid red;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        @media screen and (max-width: 1000px) {
            .d{
                overflow-x: hidden;
            }

            .i {
                text-align: center;
                height: 45%;
                margin-left: 35px
            }

            .t1 {
                text-align: center;
                display: block;
                font-size: 40px;
                text-decoration: none;
                color: #0069d9;
                margin-left: 20px;
                margin-top: -140px;
                font-family: 'Josefin Sans'
            }

            .im {
                background-color: lavender;
                width: 105%;
            }

            .co {
                margin-left: 20px;
            }

            .up {
                margin-left: 320px
            }
            .txt1{
                font-size: 31px;
                color: indigo
            }
            .txt2{
                text-align:justify;
                color: black;
                font-size: 18px
            }
            .im1{
                margin-left: 20px;
                margin-top: 0px;
                width: 300px;
                height: 300px;
            }
            .bt1{
                display: inline-block;
                font-weight: 400;
                color: #212529;
                margin-left: 100px;
                margin-bottom: 10px
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                color: #dc3545;
                border-color: #dc3545;
                border: 1px solid red;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
        }
    </style>

</head>
<!--<div class="header">-->
<?php
//include"include/heading.php";
//?>
<div class="d">
    <div class="row im" id="t" >
        <div class="col-md-2 col-sm-12 col-lg-2">
            <img src="images/IMG-20190730-WA0000.jpg" class="i"  alt="">
        </div>
        <div class="col-md-10 col-sm-12 col-lg-10" style="padding: 0px">
            <strong>
                <p class="t1">Ingens Management Services Pvt.Ltd </p>
            </strong>
        </div>
    </div>
    <?php
    include"include/header.php";
    ?>
    <!--</div>-->
    <body style="background-color: azure">

    <p class="fixed-bottom co">
        <a href="contact_us.php"><span class="fa fa-phone" style="color: red"></span></a>
    </p>
    <p class="fixed-bottom up">
        <a href="#t"><span class="fa fa-angle-double-up" style="color: red"></span></a>
    </p>
    <!--<div class="parallax1">-->
    <h1 class="text-center txt1">Permanent Recruitement</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <p class="txt2">
                    Finding the right people for permanent recruitment is a meticulous, time intensive job requiring a great deal of skill and experience.

                    Our recruitment consultants are experts not only in the industries we serve, but also in the professional disciplines we represent. Our recruiters aren't just out of School, most average more than five years experience.

                    Whether you are a candidate searching for a great role or an employer seeking top talent, we have the skilled & experienced consultants who can help you reach your career/staffing goals.
                </p>

            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
                <img src="Ignes/Page%20Images/Recruitment.jpg" class="im1" alt="">
            </div>
        </div>
    </div>
    <div class="container">
            <p class="txt2">
                Finding the right people for permanent recruitment is a meticulous, time intensive job requiring a great deal of skill and experience.

                Our recruitment consultants are experts not only in the industries we serve, but also in the professional disciplines we represent. Our recruiters aren't just out of School, most average more than five years experience.

                Whether you are a candidate searching for a great role or an employer seeking top talent, we have the skilled & experienced consultants who can help you reach your career/staffing goals.

                We're different because we blend the knowledge we've gained from our years of experience with innovative recruitment and selection tools. This powerful combination enables us to find, evaluate,and place the right candidates, delivering a completely customised strategic staffing solution.
                What does this mean for hiring professionals? Quite simply, it means that you'll be paired with an experienced recruitment specialist with a world of talent at their fingertips, saving you time and connecting you with the most precious commodity of all...great people.
            </p>
<!--            <a href="application.php" class="btn btn-outline-danger" style="color: black; margin-left: 1000px">Apply Now</a>-->
        <a href="contact_us.php" class="bt1 btn-outline-danger">Contact Us</a>
    </div>


    <br>

<!--<div class="parallax2">-->
    <?php
    include 'include/footer.php'
    ?>

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
//        $('.stellarnav').stellarNav({
//            theme: 'dark'
//        });
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
</body>
</div>
</html>