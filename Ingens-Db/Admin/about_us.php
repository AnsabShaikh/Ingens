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
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js'></script>

    <style>

        * {box-sizing: border-box;}

        .img-comp-container {
            position: relative;
            height: 200px; /*should be the same height as the images*/
        }

        .img-comp-img {
            position: absolute;
            width: auto;
            height: auto;
            overflow: hidden;
        }

        .img-comp-img img {
            display: block;
            vertical-align: middle;
        }

        .img-comp-slider {
            position: absolute;
            z-index: 9;
            cursor: ew-resize;
            /*set the appearance of the slider:*/
            width: 40px;
            height: 40px;
            background-color: #2196F3;
            opacity: 0.5;
            border-radius: 100%;
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

        .parallax1 {
            /* The image used */
            /*background-image: url("images/o1.jpg");*/

            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .sl{
            /*width: 1250px;*/
            height: 300px
        }
        /* styles for this sample only */
        *{ margin: 0; padding: 0; }
        body { height: 3200px; font-size: 16px; font-family: 'Exo 2', sans-serif; background: azure; color: #555; }
        .header { text-align: center; }
        /*.header a { padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; }*/
        /*.header p { margin: 10px 0 40px 0; font-size: 18px; }*/
        .p1{
            padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; margin: 10px 0 40px 0
        }
        .container { max-width: 1200px; margin: 0 auto; }
        @media only screen and (max-width : 1000px) {
            .stellarnav > ul > li > a { padding: 20px 23px; }
        }
        /* styles for this sample only */
    </style>

<!--    <script>-->
<!--        function initComparisons() {-->
<!--            var x, i;-->
<!--            /*find all elements with an "overlay" class:*/-->
<!--            x = document.getElementsByClassName("img-comp-overlay");-->
<!--            for (i = 0; i < x.length; i++) {-->
<!--                /*once for each "overlay" element:-->
<!--                 pass the "overlay" element as a parameter when executing the compareImages function:*/-->
<!--                compareImages(x[i]);-->
<!--            }-->
<!--            function compareImages(img) {-->
<!--                var slider, img, clicked = 0, w, h;-->
<!--                /*get the width and height of the img element*/-->
<!--                w = img.offsetWidth;-->
<!--                h = img.offsetHeight;-->
<!--                /*set the width of the img element to 50%:*/-->
<!--                img.style.width = (w / 2) + "px";-->
<!--                /*create slider:*/-->
<!--                slider = document.createElement("DIV");-->
<!--                slider.setAttribute("class", "img-comp-slider");-->
<!--                /*insert slider*/-->
<!--                img.parentElement.insertBefore(slider, img);-->
<!--                /*position the slider in the middle:*/-->
<!--                slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";-->
<!--                slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";-->
<!--                /*execute a function when the mouse button is pressed:*/-->
<!--                slider.addEventListener("mousedown", slideReady);-->
<!--                /*and another function when the mouse button is released:*/-->
<!--                window.addEventListener("mouseup", slideFinish);-->
<!--                /*or touched (for touch screens:*/-->
<!--                slider.addEventListener("touchstart", slideReady);-->
<!--                /*and released (for touch screens:*/-->
<!--                window.addEventListener("touchstop", slideFinish);-->
<!--                function slideReady(e) {-->
<!--                    /*prevent any other actions that may occur when moving over the image:*/-->
<!--                    e.preventDefault();-->
<!--                    /*the slider is now clicked and ready to move:*/-->
<!--                    clicked = 1;-->
<!--                    /*execute a function when the slider is moved:*/-->
<!--                    window.addEventListener("mousemove", slideMove);-->
<!--                    window.addEventListener("touchmove", slideMove);-->
<!--                }-->
<!--                function slideFinish() {-->
<!--                    /*the slider is no longer clicked:*/-->
<!--                    clicked = 0;-->
<!--                }-->
<!--                function slideMove(e) {-->
<!--                    var pos;-->
<!--                    /*if the slider is no longer clicked, exit this function:*/-->
<!--                    if (clicked == 0) return false;-->
<!--                    /*get the cursor's x position:*/-->
<!--                    pos = getCursorPos(e)-->
<!--                    /*prevent the slider from being positioned outside the image:*/-->
<!--                    if (pos < 0) pos = 0;-->
<!--                    if (pos > w) pos = w;-->
<!--                    /*execute a function that will resize the overlay image according to the cursor:*/-->
<!--                    slide(pos);-->
<!--                }-->
<!--                function getCursorPos(e) {-->
<!--                    var a, x = 0;-->
<!--                    e = e || window.event;-->
<!--                    /*get the x positions of the image:*/-->
<!--                    a = img.getBoundingClientRect();-->
<!--                    /*calculate the cursor's x coordinate, relative to the image:*/-->
<!--                    x = e.pageX - a.left;-->
<!--                    /*consider any page scrolling:*/-->
<!--                    x = x - window.pageXOffset;-->
<!--                    return x;-->
<!--                }-->
<!--                function slide(x) {-->
<!--                    /*resize the image:*/-->
<!--                    img.style.width = x + "px";-->
<!--                    /*position the slider:*/-->
<!--                    slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--    </script>-->

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

<!--<div class="parallax1">-->
    <div class="container">
<div class="item">
    <div class="row">
        <div class="col-sm-12">
            <p class="text-center" style="color: #0069d9;font-size:70px">
                <b>Ingens</b>
            </p>
        </div>
    </div>
</div>
        <div class="item">
            <div class="row" id="about_us">
            <h2 style="color: red">About Us</h2>
            </div>
    <div class="row">
        <div class="col-sm-6">
            <p style="color: black;font-size: 18px" class="text-justify">
                <strong class="text-justify">
                Ingens Management Services is a management consulting, technology services
                and outsourcing company headquartered in India , serving clients across India.
                Combining unparalleled experience, comprehensive capabilities across all industries
                and business functions, Ingens collaborates with clients to help them become
                high-performance businesses.

                <!--                We employ the agile development methodology and follow the Software Development-->
                <!--                Life Cycle (SDLC) that is suitable for your business applications. Thus our quality and-->
                <!--                expert programming, our unique development methodology and favorable delivery-->
                <!--                model ensures completion of projects within stipulated time and provides visibility into-->
                <!--                the progress of your projects on a daily and weekly basis. With many ongoing contracts-->
                <!--                and a consistent record of contract renewals, many of them for over 5 years now, is a-->
                <!--                testimony to our quality, abilities and outstanding service.-->
           </strong>
            </p>
        </div>
        <div class="col-sm-6">
            <p style="color: black;font-size: 18px" class="text-justify">
                <strong class="text-justify">
                Our recruitment services, IT services, business solutions and contract
                staffing solutions bring you a level of certainty that no other
                competitor can match. Our specialized and evolved teams accumulate the
                talent across industry domains like Information Technology, Engineering,
                Automobile, Operations, Manufacturing, Sales & Support and other helps
                our customers to save their immensely valuable time and also reduces cost.
                <!--                But you may be wondering if you need to be "technically savvy" in order to use our-->
                <!--                services. Well luckily for you the word "technology" only resides within our own walls!-->
                <!--                Yep, you'll like our friendly staff, and quickly learn that if you want to discuss things-->
                <!--                "technologically" then you will find plenty of folks here who can do it as well as anyone.-->
                <!--                But, if you don't have a clue about all this stuff, don't worry. You'll find we don't speak-->
                <!--                "techno babble" to anyone unless they ask. Instead, we use good old, "down-to-earth--->
                <!--                layman-speak" for making sure you completely understand all aspects of your project.-->
            </strong>
            </p>
        </div>
    </div>
  </div>
  <div class="item">
    <div class="row">
        <div class="col-sm-6">
            <p style="color: black;font-size: 18px" class="text-justify">
                <strong class="text-justify">
                Ingens provides technical temporary staffing, right-to-hire, and direct
                permanent placements across  India. We do it better and faster than
                other providers because we invest the time to understand not only your
                requirements, but also your strategic goals, business initiatives,
                project timing, and corporate culture
            </strong>
            </p>
        </div>
        <div class="col-sm-6">
            <p style="color: black;font-size: 18px" class="text-justify">
                <strong class="text-justify">
                We ensure that the candidates are innovative and constantly evolving to
                perform well at the industry level. Quality hiring enhances our customers
                growth by increasing their graph on both the axes. This makes our services unique.
            </strong>
            </p>
        </div>
    </div>
  </div>
    <br><br>
  <div class="item">

        <div class="row" id="why_us">
        <h2 style="color: red">Why Us</h2>
    </div>
  </div>
    <br>
  <div class="item">

        <div class="row">
        <div class="col-sm-6">
            <h3 style="color:#F7A92C;">
                We Understand Your Needs Better
            </h3>
            <p style="color: black;font-size: 18px" class="text-justify">
                <strong class="text-justify">
                    We know that as a business person, you expect your software partner to be
                    more than just someone who simply does what he/she's been told to do. As
                    experts, it is our responsibility to extract the correct and detailed
                    requirements from you, and also help and guide you regarding the best way
                    to have your project undertaken.
                </strong>
            <p class="text-justify" style="color: black;font-size: 18px">
                <strong class="text-justify">
                It is our duty to respond to your ideas with enhancements, options, suggestions
                and even warnings, wherever necessary. As an organization dedicated to better
                software development, we not only keep track of the latest trends in Internet
                technology but we also keep track of new developments in processes and products
                that will help your business do better and get faster results.
                    </strong>
            </p>
            </p>
        </div>
        <div class="col-sm-6">
            <h3 style="color:#F7A92C;">
                You're Assured of Getting the Right People
            </h3>
            <p style="color: black;font-size: 18px" class="text-justify">
                <strong class="text-justify">
                    All of our analysts, architects, engineers, programmers, managers, SEO
                    consultants and designers are specialists in their respective fields and
                    adept in the latest technologies. We recruit and retain the best of talent
                    who understand your project objectives and needs better, work with you
                    closely and proactively and who are best suited for your business.
                </strong>
            <p style="color: black;font-size: 18px" class="text-justify">
                <strong class="text-justify">
                We take care of the employees for you by ensuring - skills enhancement,
                motivation, work-life balance, etc in them. You are then free to concentrate on
                your core business without worrying about the employee and productivity issues
                that eat into the management's time.
                    </strong>
            </p>
            </p>
        </div>
    </div>
  </div>
</div>
<div class="container">
        <br><br>
        <div class="item">
            <div class="row" id="partners">
                <h2 style="color: red">Partners</h2>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <img src="images/par1.jpg" style="width: 300px;height: 300px" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="images/par2.jpg" style="width: 300px;height: 300px" alt="">
                </div>
                <!--            <div class="col-sm-3">-->
                <!--                <img src="images/images/assets/image/3.jpg" style="width: 100%;height: 100%" alt="">-->
                <!--            </div>-->
                <!--            <div class="col-sm-3">-->
                <!--                <img src="images/images/assets/image/1.jpg" style="width: 100%;height: 100%" alt="">-->
                <!--            </div>-->
            </div>
         </div>
    <div class="item">
        <br><br>
            <div class="row">
                <h2 style="color: red">Our Team</h2>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p style="color: black;font-size: 18px" class="text-justify">
                        <strong class="text-justify">
                        What makes Ingens Management Services Pvt. Ltd unique and special is our team of well qualified, disciplined yet vibrant people in the industry providing full-cycle solutions  in various industries like recruitment, IT, business and contract staffing.
                        <br>
                        Afshan Shaikh the prime mover of Ingens is a  enthusiast who ensures that the best practices are followed. She constantly motivates teams to improve and do their best. She helps clients to meet their objectives and shape their ideas.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    <div class="item">

    <div class="row">
                <div class="col-sm-3">
                    <img src="images/a.jpg" style="width: 100%;height: 100%" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="images/bq.jpg" style="width: 100%;height: 100%" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="images/pr4.jpg" style="width: 100%;height: 100%" alt="">
                </div>
                <div class="col-sm-3">
                    <img src="images/pw1.jpg" style="width: 100%;height: 100%" alt="">
                </div>
            </div>
    </div>
            <br><br>
<!--                    <div class="row">-->
<!--                        <div class="img-comp-container">-->
<!--                            <div class="img-comp-img">-->
<!--                                <img src="images/a.jpg" width="300" height="200">-->
<!--                            </div>-->
<!--                            <div class="img-comp-img img-comp-overlay">-->
<!--                                <img src="images/a1.jpg" width="300" height="200">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->


        </div>
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
    /*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
    initComparisons();
</script>
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