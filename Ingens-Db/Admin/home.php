<?php
include"include/db.php";
?>
<?php
session_start();

if(!$_SESSION['username'])
{

    header("Location: index.php");//redirect to login page to secure the welcome page without login access.
}

?>
<?php
//session_start();
//if(isset($_SESSION['username']))
//{
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingens</title>
    <link rel="stylesheet" href="css/stellarnav.css">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="new_plugins/Viewport-trigger-Elements-Slide-In-Animations-with-jQuery/rainbow.css">
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js'></script>-->

    <style>

        .c{
            border: 2px solid lightseagreen;
            box-shadow: 4px 4px 4px  4px lightslategrey;
            margin: 11px;
            min-height: 230px;
            width: 400px;
        }
        .parallax1 {
            /* The image used */
            background-image: url("");

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
            background-image: url("");

            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
        .bt{

            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 4px;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

        }
        .bt1{
            margin-left: 40px;
            width: 50%;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .bt3{
            margin-left: 40px;
            width:100%;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .sl{
            /*width: 1250px;*/
            height: 500px
        }

        .ca1 {
            display: block;
            text-align: center;
            width: 320px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            padding-bottom: 40px;
            border-bottom: 1px solid #c4c4c4;
            position: relative;
        }
        /* styles for this sample only */
        *{ margin: 0; padding: 0; }
        body { height: 3200px; font-size: 16px; font-family: 'Exo 2', sans-serif; background: azure;width: 1500px; color: #555; }
        .header { text-align: center; }
        .header a { padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; }
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


</head>
<!--<div class="header">-->
<?php
include"include/heading.php";
?>

<?php
include"include/header.php";
include"include/db.php";
?>
<!--</div>-->
<body style="background-color: azure">
<p class="fixed-bottom" style="margin-left: 20px;">
    <a href="contact_us.php"><span class="fa fa-phone" style="color: red"></span></a>
</p>
<p class="fixed-bottom" style="margin-left: 1300px">
    <a href="#t"><span class="fa fa-angle-double-up" style="color: red"></span></a>
</p>
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        <li data-target="#carouselExampleControls" data-slide-to="3"></li>
        <!--        <li data-target="#carouselExampleControls" data-slide-to="4"></li>-->

    </ol>
    <div class="sl carousel-inner">

        <div class="carousel-item active">
            <img src="images/im1.jpg" class="sl d-block w-100" alt="first slide">
        </div>

        <div class="carousel-item ">
            <img src="images/im2.jpeg" class="sl d-block w-100" alt="second slide">
        </div>

        <div class="carousel-item ">
            <img src="images/im3.jpg"  class="sl d-block w-100" alt="third slide">
        </div>
        <div class="carousel-item ">
            <img src="images/im4.jpg"  class="sl d-block w-100" alt="fourth slide">
        </div>


    </div>
    <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">previous</span>
    </a>
    <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">next</span>
    </a>

</div>
<!--<div class="parallax1">-->
<div class="container">
    <div class="item" id="hello">
        <div class="row">
            <div class="col-12">
                <h1 style="color: blue" class="text-center">
                    <strong>Welcome to HR Hub</strong>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <p class="text-justify" style="color: black">
                    Ingens Management Services Pvt. Ltd is an emerging HR Outsourcing organisation
                    located in a charming city Puneproviding dynamic and right talent for right place!
                </p>
                <p class="text-justify" style="color: black">
                    We are a service provider in recruitment services, subcontracting services and software
                    development. We have been serving top notch clients Pan India across various domains
                    with services to an extent that today we are preferred partners for our clients.
                </p>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <p class="text-justify" style="color: black">
                    With the huge corporate experience that our team carries, the approach to serve the
                    client is not just merely to complete the assignments but to deliver a feeling of been
                    served to satisfaction.
                </p>
                <p class="text-justify" style="color: black">
                    Providing skilled professional enthusiasts who would utilize their potential to provide
                    the best of the services across all industries, is the ultimate goal of Ingens
                    Management Services Pvt. Ltd .
                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <a href="add_home_cards.php"><button class="bt3 btn-info">Add New</button></a>
        </div>
        <br>
        <!--        <div id="sec1">-->
        <div class="row">

            <?php
            $q = mysqli_query($con, "select * from home_card");

            while ($row = mysqli_fetch_array($q)) {

                ?>

                <!--        <div class="col-md-1 col-sm-12 col-lg-1"></div>-->


                <div class="col-md-4 col-sm-12 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="../uploads/<?php echo $row['image_file'] ?>" title="<a href='contact_us.php' class='btn btn-primary'>Contact Us</a>" style="height: 250px;border: none" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title_text']?></h5>

                            <p class="card-text"><?php echo $row['data_text'] ?></p>
                            <a target="_parent" class="bt btn-primary" href="<?php echo $row['more_link'] ?>">
                                Read More
                            </a>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="edit_home_cards.php?id=<?php echo $row['id'] ?>"><button class="bt1 btn-info">Edit</button></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="del_home_cards.php?id=<?php echo $row['id'] ?>"><button class="bt1 btn-info">Delete</button></a>
                        </div>
                    </div>

                </div>

                <?php
            }
            ?>

        </div>
    </div>

    <!--    </div>-->
</div>
<br><br>

<div class="container">
    <div class="item">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4">
                <strong style="color: red">WE UNDERSTAND YOUR NEEDS BETTER</strong>
                <br>
                <p class="text-justify" style="color: black">
                    We know that as a business person, you expect your software
                    partner to be more than just someone who simply does what
                    he/she's been told to do. As experts, it is our responsibility to
                    extract the correct and detailed requirements from you, and
                    also help and guide you regarding the best way to have your
                    project undertaken.
                </p>
            </div>
            <div class="col-md-1 col-sm-12 col-lg-1">
                <span style="margin-top: 100px;font-size: 60px;color: blue" class="fa fa-angle-double-left"></span>
            </div>
            <div class="col-md-2 col-sm-12 col-lg-2">
                <strong><b class="text-center" style="font-size: 28px;color: lightseagreen">WHY US?</b></strong>
            </div>
            <div class="col-md-1 col-sm-12 col-lg-1">
                <span style="margin-top: 100px;font-size: 60px;color: blue" class="fa fa-angle-double-right"></span>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4">
                <strong style="color: red">COMPLETE SOLUTION PROVIDER</strong>
                <br>
                <p class="text-justify" style="color: black">
                    Need a website? Looking for a mobile application? Not sure
                    which technology? Don't know where to host your website?
                    Worried about high traffic and scalability? Concerned about
                    search engine rankings? Social media? Well iProgrammer
                    will take care of all these and more as we want you to focus
                    on your core business.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="item">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4">
                <strong style="color: red">ASSURANCE OF GETTING THE RIGHT PEOPLE</strong>
                <br>
                <p class="text-justify" style="color: black">
                    All of our analysts, architects, engineers, programmers,
                    managers, SEO consultants and designers are specialists,
                    experts in their respective fields and adept in the latest
                    technologies. We recruit and retain the best of talent who
                    understand your project objectives and needs better, work with
                    you closely and proactively and who are best suited for your
                    business.
                </p>
            </div>
            <div class="col-md-1 col-sm-12 col-lg-1">
                <span style="margin-top: 100px;font-size: 60px;color: blue" class="fa fa-angle-double-left"></span>
            </div>
            <div class="col-md-2 col-sm-12 col-lg-2"></div>
            <div class="col-md-1 col-sm-12 col-lg-1">
                <span style="margin-top: 100px;font-size: 60px;color: blue" class="fa fa-angle-double-right"></span>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4">
                <strong style="color: red">WITHIN BUDGET. ON TIME.</strong>
                <br>
                <p class="text-justify" style="color: black">
                    Our core competency lies in developing solutions for start-
                    ups and small to medium sized businesses that are up
                    against big organizations with big budgets and highly paid
                    talented people. We level the playing field by providing the
                    same level of expertise and talent that is available to top
                    notch companies and, within decided and stipulated budget.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="item">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4">
                <strong style="color: red">TRANSPARENCY AND VISIBILITY</strong>
                <br>
                <p class="text-justify" style="color: black">
                    Working with us is like having your own in house team. You get
                    the opportunity to be directly in touch with your development
                    team at all times, have extensive and open communications
                    thus getting a complete visibility into the daily activities of each
                    developer and an hour-by-hour accounting of their day.
                </p>
            </div>
            <div class="col-md-1 col-sm-12 col-lg-1">
                <span style="margin-top: 100px;font-size: 60px;color: blue" class="fa fa-angle-double-left"></span>
            </div>
            <div class="col-md-2 col-sm-12 col-lg-2"></div>
            <div class="col-md-1 col-sm-12 col-lg-1">
                <span style="margin-top: 100px;font-size: 60px; color: blue" class="fa fa-angle-double-right"></span>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4">
                <strong style="color: red">EASE OF COMMUNICATION </strong>
                <br>
                <p class="text-justify" style="color: black">
                    We at Ingens believe that communication is the key
                    to success. Apart from the mundane modes of contact like
                    email, chats and messengers, you are given the direct
                    mobile numbers of all the team members who are part of
                    your project so that you can directly contact them during
                    critical or emergency situations.
                </p>
            </div>
        </div>
    </div>
    <!--    crm@bobfinancial.com-->
</div>
</div>
<?php
include 'include/footer.php'
?>

<script type='text/javascript' src='js_files/jquery-3.4.1.min.js'></script>
<script src="new_plugins/Viewport-trigger-Elements-Slide-In-Animations-with-jQuery/magic.js"></script>
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
<?php
//}
//else
//{
//    header("location:index.php");
//}
//?>