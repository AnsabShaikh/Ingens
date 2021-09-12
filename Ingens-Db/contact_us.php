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
        .l{
            margin-left: 30px;
            text-align: center;
        }

        .r{
            width: 290px;
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
        .tb{
            width: 290px
        }
        .bt1 {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #007bff;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .ma1{
            overflow:hidden;
            height:400px;
            width:520px;
        }
        .ma2{
            height:400px;
            width:520px;
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
            .l{
                font-size: 20px;
                margin-left: 70px;
                text-align: center;
            }

            .r{
                text-align: center;
                font-size: 20px;
                border: 1px solid black;
                width: 290px;
                height: 30px;
            }
            .tb{
                text-align: center;
                font-size: 20px;
                border: 1px solid black;
                width: 290px
            }
            .m{
                margin-top: 0px;
            }
            .bt1 {
                display: inline-block;
                font-weight: 400;
                color: white;
                text-align: center;
                vertical-align: middle;
                margin-left: 100px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: #007bff;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
            .ma1{
                overflow:hidden;
                height:400px;
                width:300px;
            }
            .ma2{
                height:400px;
                width:300px;
            }
        }
    </style>

</head>
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
<!--    <h1 class="text-center" style="color: indigo">Address</h1>-->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Business Enquiry</h1>
                <form action="" class="for" name="f1" method="post" enctype="multipart/form-data">
                    <div class="row m">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <strong><label for="" class="l">Your Name</label></strong>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <input type="text" required class="r" name="e_name" placeholder="Name">
                        </div>
                    </div>
                    <div class="row m">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <strong><label for="" class="l">Your Email</label></strong>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <input type="email" required class="r" name="mail" placeholder="Email">
                        </div>
                    </div>
                    <div class="row m">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <strong><label for="" class="l">Your Phone Number</label></strong>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <input type="number"  class="r" name="mobile" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="row m">
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <strong> <label for="" class="l">Your Message</label></strong>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <textarea name="msg" id="" cols="30" class="tb" rows="10" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-sm-12 col-lg-10">
                            <input type="submit" name="submit" class="bt1 btn-info">
                        </div>
                    </div>
                </form>
            </div>
            <!--        <div class="col-sm-1"></div>-->
            <div class="col-md-4 col-sm-12 col-lg-4" style="margin-top: 50px">
                <div class="container">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB-_6Hp3132psUa5xElcwdR_6-okGyjpW0'></script>
                    <div class="ma1">
                        <div id='gmap_canvas' class="ma2"></div>
                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
                    <a href='https://embedmaps.org/'>embed a google map</a>
                    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=9a1476a2fb7c1c64a4757c62693b1875a503bdcc'></script>
                    <script type='text/javascript'>
                        function init_map()
                        {
                            var myOptions = {
                                zoom:12,
                                center:new google.maps.LatLng(18.547456,73.80762879999997),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(18.547456,73.80762879999997)
                            });
                            infowindow = new google.maps.InfoWindow({content:'<strong>Ingens Management Services</strong><br>Baner - Pashan - link Road,<br>411021 Pune<br>'});
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map,marker);
                            });
                            infowindow.open(map,marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                </div>

            </div>


        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-5">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                           aria-controls="nav-home" aria-selected="true"><span class="fa fa-phone-square">&nbsp;&nbsp;Candidate Contact</span></a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                           aria-controls="nav-profile" aria-selected="false"><span class="fa fa-phone-square">&nbsp;&nbsp;Client Contact</span></a>
                    </div>
                </nav>
                <div class="tab-content"  id="nav-tabContent">
                    <div class="tab-pane show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <br>
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

        </div>
    </div>
<br><br>

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

<?php

if (isset($_POST['submit'])) {

    $e_name = $_POST['e_name'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];

    if ($e_name == "" || $mail == "" || $mobile == "" || $msg == "") {

        echo '<script>

alert("All fields are required...!");
window.location = "contact_us.php";
//document.f1.email.focus();
</script>';
    }

    else {
        $query = mysqli_query($con, "insert into enquiry(e_name, mail, mobile, msg) VALUE ('$e_name','$mail','$mobile','$msg')");
    }

    if ($query) {


        echo '<script>

alert("register successfully");
window.location = "contact_us.php";

</script>';


    } else {


        echo '<script>

alert("Failed");
window.location = "contact_us.php";

</script>';


    }


}

?>





























