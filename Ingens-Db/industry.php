<?php
include"Admin/include/db.php";
?>
<?php
//session_start();
//if(isset($_SESSION['username']))
//{
//    header("location:home.php");
//}
//else
//{
//    header("location:index.php");
////    $u=$_SESSION['usr'];
////    echo '<script>
////
////    alert("'.$u.'");
////  </script>';
//}
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
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <!--    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.js'></script>-->

    <style>

        .c{
            border: 2px solid lightseagreen;
            box-shadow: 4px 4px 4px  4px lightslategrey;
            margin: 11px;
            min-height: 230px;
            width: 350px;
        }

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
        .d{
            overflow-x: hidden;
        }
        .txt1{
            color: mediumblue;
            margin-top: 10px
        }
        .txt2{
            font-size: 20px;
        }
        @media screen and (max-width: 1000px) {
            .d {
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

            .c{
                border: 2px solid lightseagreen;
                box-shadow: 4px 4px 4px  4px lightslategrey;
                margin: 11px;
                min-height: 230px;
                width: 300px;
            }

            .co {
                margin-left: 20px;
            }

            .up {
                margin-left: 320px
            }
            .txt1{
                font-size: 31px;
                color: mediumblue;
                margin-top: 10px
            }
            .txt2{
                font-size: 20px;
                text-align: center;
            }
        }
    </style>


</head>
<!--<div class="header">-->
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
    include"Admin/include/db.php"
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
<div class="container">
    <div class="item">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center txt1">Industrial Practices</h1>
            </div>
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
                    <div class="c embed-responsive">
                        <img class="card-img-top" src="uploads/<?php echo $row['image_file'] ?>" style="height: 250px;border: none" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="txt2"><strong><?php echo $row['title']?></strong></h5>
                        </div>

                    </div>
                    <br>
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