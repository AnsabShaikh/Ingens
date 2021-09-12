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
        .bt3{
            margin-top: 10px;
            margin-left: 400px;
            width:20%;
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

        .m{
            margin-top: 10px;
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
            display: block; font-size: 48px; text-decoration: none; color: mediumblue; margin: 10px 0 40px 0
        }
        .container { max-width: 1200px; margin: 0 auto; }
        @media only screen and (max-width : 1000px) {
            .stellarnav > ul > li > a { padding: 20px 23px; }
        }
        /* styles for this sample only */
    </style>
<!--    style="background: -webkit-linear-gradient(right bottom,#dfb480,#dfb480,#3d5978,#05345b,#594b67);background: -o-linear-gradient(right top,#3d5978,#05345b,#dfb480,#594b67,#636280,#8da7a7); background: -moz-linear-gradient(right top,#3d5978,#05345b,#dfb480,#594b67,#636280,#8da7a7);background: linear-gradient(right top,#3d5978,#05345b,#dfb480,#594b67,#636280,#8da7a7);"-->
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
<div class="item">
    <p class="fixed-bottom" style="margin-left: 1300px">
        <a href="#t"><span class="fa fa-angle-double-up" style="color: red"></span></a>
    </p>
    <!--<div class="parallax1">-->
<!--    <h1 class="text-center" style="color: indigo">Address</h1>-->
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                 <nav style="margin-top: 100px;">
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                                   aria-controls="nav-home" aria-selected="true"><span class="fa fa-phone-square">Candidate Contact</span></a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                                   aria-controls="nav-profile" aria-selected="false">Client Contact</a>
                            </div>
                        </nav>
                        <div class="tab-content"  id="nav-tabContent">
                            <div class="tab-pane show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <br>
                                <a href="Edit_con1.php"><button class="bt3 btn-primary">Add New</button></a>
                                <?php
                                $q = mysqli_query($con, "select * from contact_1");

                                while ($row = mysqli_fetch_array($q)) {

                                ?>
                                <strong>
                                    <p><?php echo $row['text'] ?></p>
                                    <span class="fa fa-phone">&nbsp;&nbsp;&nbsp;<?php echo $row['mobile'] ?></span><p></p>
                                </strong>
                                    <?php
                                }
                                ?>
                            </div>

                            <div class="tab-pane" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <br>
                                <a href="Edit_con2.php"><button class="bt3 btn-info">Add New</button></a>
                                <?php
                                $q = mysqli_query($con, "select * from contact_2");

                                while ($row = mysqli_fetch_array($q)) {

                                ?>
                                <strong>
                                    <p><?php echo $row['text'] ?></p>
                                    <span class="fa fa-phone">&nbsp;&nbsp;&nbsp;<?php echo $row['mobile'] ?></span><p>  </p>
                                </strong>
                                    <?php
                                }
                                ?>
                            </div>
                </div>
            </div>
            <!--        <div class="col-sm-1"></div>-->
            <div class="col-sm-3">
                <h1>
                    Address
                </h1>
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBdim6yZNB5f2D0ke4jfLMvxKc26ivZQ5I'></script>
                <div style='overflow:hidden;height:400px;width:520px;'>
                    <div id='gmap_canvas' style='height:400px;width:520px;'></div>
                    <style>
                        #gmap_canvas img{
                            max-width:none!important;
                            background:none!important
                        }
                    </style>
                </div>
<!--                <a href='https://add-map.com/'>adding google map to website</a>-->
                <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c6c00570df82e685aa0483bf963f0811e55b5dd4'></script>
                <script type='text/javascript'>
                    function init_map(){
                        var myOptions = {
                            zoom:12,
                            center:new google.maps.LatLng(18.5491105,73.79128149999997),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                        marker = new google.maps.Marker({
                            map: map,position: new google.maps.LatLng(18.5491105,73.79128149999997)
                        });
                        infowindow = new google.maps.InfoWindow({
                            content:'<strong>INGENS MANAGEMENT SERVICES</strong><br>Baner - Pashan - link Road,<br>411021 Pune<br>'
                        });
                        google.maps.event.addListener(
                            marker, 'click', function()
                            {
                                infowindow.open(map,marker);
                            }
                        );
                        infowindow.open(map,marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                </script>
            </div>


        </div>
        <br><br>
        <div class="row">
            <div class="col-12">

                <table class="table table-bordered table-striped table-responsive-lg table-responsive-md table-responsive-sm">

                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Email Id</th>
                        <th>Mobile Number</th>
                        <th>Message</th>
                        <th>Option</th>
                    </tr>
                    <?php
                    $q = mysqli_query($con, "select * from enquiry");

                    $c = 1;
                    while ($row = mysqli_fetch_array($q)) {
                        ?>


                        <tr>

                            <td><?php echo $c ?></td>
                            <td><?php echo $row['e_name'] ?></td>
                            <td><?php echo $row['mail'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <td><?php echo $row['msg'] ?></td>
                            <td><a href="delete_enquiry.php?id=<?php echo $row['id'] ?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>


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





























