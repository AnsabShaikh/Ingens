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
            background-image: url("images/pe3.jpg");

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

        .r{
            width: 300px;
            height: 30px;
        }
        .for{
            display: block;
            width: 100%;
            /*margin-left: 20%;*/
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: azure;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

        }
        .m{
            margin-top: 10px;
        }
        .r{
            width: 100%;
            height: 100%;
        }

        /*.ma{*/
        /*margin-top: 10px;*/
        /*}*/
        /*.ra{*/
        /*width: 100%;*/
        /*height: 100%;*/
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
<div class="row bg-primary" style="width:101%;">k</div>
<?php
include"include/db.php";
?>
<!--</div>-->
<body style="background-color: azure">
<div class="item">
    <p class="fixed-bottom" style="margin-left: 1300px">
        <a href="#t"><span class="fa fa-angle-double-up" style="color: red"></span></a>
    </p>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <a href="contact_us.php"><button class="btn btn-info" style="margin-top: 20px;margin-left: 20px">Back</button></a>
            </div>
            <div class="col-md-5 col-sm-12 col-lg-5">
                <a href="add_con_1.php"><button class="btn btn-info" style="margin-top: 20px;margin-left: 300px">Add New</button></a>
            </div>
        </div>
    </div>
    <!--<div class="parallax1">-->
    <!--    <h1 class="text-center" style="color: indigo">Address</h1>-->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!--                <p>hello</p>-->
                <table class="table table-bordered table-striped table-responsive-lg table-responsive-md table-responsive-sm">

                    <tr>
                        <th>Sr.No</th>
                        <th>Title Of Contact</th>
                        <th>Mobile Number</th>
                        <th>Option</th>
                    </tr>
                    <?php
                    $q = mysqli_query($con, "select * from contact_1");

                    $c = 1;
                    while ($row = mysqli_fetch_array($q)) {
                        ?>


                        <tr>

                            <td><?php echo $c ?></td>
                            <td><?php echo $row['text'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><a href="ed_con1.php?id=<?php echo $row['id'] ?>"><input type="button" style="width: 70px" class="btn btn-primary" value="Edit"></a>
                                <a href="delete_con1.php?id=<?php echo $row['id'] ?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>


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
