<?php
//session_start();
$j = $_GET['job'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingens</title>
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/stellarnav.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="plugins/validate.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <style>
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
        .for{
            display: block;
            width: 60%;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 20%;
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
        .t{
            margin-top: 10px;
            margin-left: 30%;
        }
        .m{
            margin-top: 10px;
        }
        .r{
            width: 300px
        }
        .l{
            margin-left: 35%;
        }
        .l1{
            margin-left: 35%;
        }
        .b{
            margin-top: 20px;
        }
        .st{
            text-align: justify;
            font-size: 15px;

        }
        .s{

            width: 300px;
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
            .for{
                display: block;
                width: 100%;
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: 0%;
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
            .t{
                margin-top: 10px;
                margin-left: 30%;
            }
            .m{
                margin-top: 10px;
            }
            .r{
                width: 300px
            }
            .l{
                font-size: 18px;
                margin-left: 30%;
            }
            .l1{
                text-align: center;
                /*font-size: 18px;*/
                margin-left: 5%;
            }
            .b{
                margin-top: 20px;
            }
            .st{
                text-align: center;
                font-size: 12px;

            }
        }
    </style>
</head>
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

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <a href="hot_jobs.php"><button class="btn btn-info" style="margin-top: 20px">Back</button></a>
            </div>
        </div>
    </div>
    <form action="" class="for" name="f1" id="f1" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="container">
                <div class="m row">
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <label class="l" for=""> Applicant Name :</label>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <input class="r form-control" type="text"style="" name="a_name" placeholder=" Applicant Name" required>
                    </div>
                </div>
                <div class="m row">
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <label class="l" for="">Applicant Email-id :</label>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <input type="email" class="r form-control" name="mail" placeholder="Email-Id" required>
                    </div>
                </div>
                <div class="m row">
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <label for="" class="l">Contact Number :</label>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <input type="number" class="r form-control" name="mobile"  placeholder="Contact Number">
                    </div>
                </div>
                <div class="m row">
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <label for="" class="l">Upload Resume : </label><label class="l1"><strong class="st">(Please upload resume in .docx or .doc format)</strong></label>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5">
                        <input type="file" name="resume">
                    </div>
                </div>
            </div>
        </div>
        <div class="b row">
            <div class="t col-12">
                <input type="submit" name="submit" id="submit" class="text-center btn btn-info">
            </div>
        </div>
    </form>
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

<?php


if (isset($_POST['submit'])) {

    $a_name = $_POST['a_name'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $resume = $_FILES['resume']['name'];
    $tmp_name = $_FILES['resume']['tmp_name'];
    $location = 'Admin/uploads/';
    $ext = pathinfo($resume, PATHINFO_EXTENSION);
    if ($a_name == "" || $mail == "" || $mobile == "" || $resume == "") {

        echo '<script>

alert("All fields are required...!");
window.location = "hot_jobs.php";
//document.f1.email.focus();
</script>';
    }
    else

        if( $ext !== 'docx' && $ext !== 'doc')
    {
        echo '<script>

alert("Please Upload Resume in Word File with .docx or .doc extension");
window.location = "hot_jobs.php";

</script>';
    }

    else {


            move_uploaded_file($tmp_name, $location . $resume);
            $query = mysqli_query($con, "insert into hot_job(a_name, mail, mobile, resume,job) VALUE ('$a_name','$mail','$mobile','$resume','$j')");


    }

    if ($query) {


//        echo".$ext.";
        echo '<script>

alert("register successfully....extension is=>  '.$ext.'");
window.location = "hot_jobs.php";

</script>';


    } else {


        echo '<script>

alert("Failed");
window.location = "hot_jobs.php";

</script>';


    }


}

?>
