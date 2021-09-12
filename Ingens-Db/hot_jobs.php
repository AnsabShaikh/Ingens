<?php
//session_start();
//$j=$_SESSION['job'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingens</title>
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/stellarnav.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

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
        .d{
            overflow-x: hidden;
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

            .co {
                margin-left: 20px;
            }

            .up {
                margin-left: 320px
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
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--                <p>hello</p>-->
                <table class="table table-bordered table-striped table-responsive-lg table-responsive-md table-responsive-sm">

                    <tr>
                        <th>Sr.No</th>
                        <th>Jobs</th>
                        <th>Requirement</th>
                        <th>Vaccancies</th>
                        <th>Option</th>
                    </tr>
                    <?php
                    $q = mysqli_query($con, "select * from job");

                    $c = 1;
                    while ($row = mysqli_fetch_array($q)) {
                        ?>


                        <tr>

                            <td><?php echo $c ?></td>
                            <td><?php echo $row['job'] ?></td>
                            <td><?php echo $row['req'] ?></td>
                            <td><?php echo $row['vac'] ?></td>
                            <td><a href="apply_job.php?job=<?php echo $row['job']?>">
                                    <input type="button" style="width: 70px" class="btn btn-outline-danger" value="Apply"></a></td>


                        </tr>


                        <?php
                        $c++;

                    }

                    ?>
                </table>
            </div>


        </div>
    </div>
</div>
<!--        <div class="col-sm-1"></div>-->



<br><br>
</div>
<!--<div class="parallax2">-->
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
</html>
