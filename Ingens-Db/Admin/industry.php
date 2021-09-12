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
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingens</title>
    <link rel="stylesheet" href="css/stellarnav.css">
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="new_plugins/Viewport-trigger-Elements-Slide-In-Animations-with-jQuery/rainbow.css">
    <link rel="stylesheet" href="css/fontawesome.css"/>
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
<!--<div class="parallax1">-->
<div class="container">
    <div class="item">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center" style="color: mediumblue">Industrial Practices</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <a href="add_industry.php"><button class="bt3 btn-info">Add New</button></a>
        </div>
        <br>
        <!--        <div id="sec1">-->

        <div class="row">

            <?php
            $q = mysqli_query($con, "select * from industry");

            while ($row = mysqli_fetch_array($q)) {

                ?>

                <!--        <div class="col-md-1 col-sm-12 col-lg-1"></div>-->


                <div class="col-md-4 col-sm-12 col-lg-4">
                    <br>
                    <div class="card embed-responsive">
                        <img class="card-img-top" src="../uploads/<?php echo $row['image_file'] ?>" style="height: 250px;border: none" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']?></h5>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="edit_industry.php?id=<?php echo $row['id'] ?>"><button class="bt1 btn-info">Edit</button></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="del_industry.php?id=<?php echo $row['id'] ?>"><button class="bt1 btn-info">Delete</button></a>
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