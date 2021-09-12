<?php
//session_start();
//if($_SESSION['sid']==session_id())
//{
//
//}
//else
//{
//    header("location:index.php");
//}
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NCL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <!--    <link rel="shortcut icon" href="images/CSIR_NCL_Logo-colour.jpg" type="image/x-icon"/>-->
    <style>
        .txt{
            text-align: center
        }
        .in{
            margin-top: 20px;
            width: 400px;
            height: 50px
        }
        .s{
            margin-top: 20px;
            width: 400px;
            height: 50px

        }
        .l{
            margin-top: 20px;
            font-family: Arial;
            font-size: 16px;
        }
        .bt1 {
            margin-top: 5px;
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
        .bt2{
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
        /* styles for this sample only */
        *{ margin: 0; padding: 0; }
        body { height: 3200px; font-size: 16px; font-family: 'Exo 2', sans-serif; background: azure; color: #555; }
        .header { text-align: center; }
        .header a { padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; }
        /*.header p { margin: 10px 0 40px 0; font-size: 18px; }*/
        .p1{
            padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; margin: 10px 0 40px 0
        }
        .container { max-width: 1200px; margin: 0 auto; }
        /* styles for this sample only */

        @media screen and (max-width: 1000px) {
            .l{
                margin-top: 20px;
                font-family: Arial;
                font-size: 16px;
            }
            .txt{
                margin-top: 10px;
                font-size: 22px;
                text-align: center
            }
            .in{
                margin: 2px;
                width: 330px;
                height: 50px
            }
            .bt1 {
                margin-top: 15px;
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
            .bt2{
                margin-top: 10px;
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

        }
    </style>

</head>

<div class="row" style="background-color: #efefef" id="t">
    <div class="col-md-2 col-sm-12 col-lg-2">
        <img src="images/IMG-20190730-WA0000.jpg" style="height:100px;margin:30px" alt="">
    </div>
    <div class="col-md-10 col-sm-12 col-lg-10">
        <p class="p1">Ingens Management Services Pvt.Ltd </p>
    </div>
</div>

<?php
//include"include/header.php";
include"include/db.php";
?>
<body>
<div class="container">
    <br><br>
    <div class="row">
        <div class="col-md-2 col-sm-12 col-lg-2">
            <a href="home.php"><button class="bt1 btn-outline-info">Back</button></a>
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6">
            <h3 class="txt"> Slider Images</h3>
        </div>
        <div class="col-md-2 col-sm-12 col-lg-2">
            <a href="add_slider.php"><button class="bt1 btn-outline-info">Add Images</button></a>
        </div>
    </div>
</div>
<br><br>

<div class="container">
    <div class="row">
        <?php
        $q = mysqli_query($con, "select * from slider");

        while ($row = mysqli_fetch_array($q)) {

            ?>

            <div class="col-md-4 col-sm-12 col-lg-4">
                <div class="card embed-responsive">
                    <img src="uploads/<?php echo $row['image'] ?>" style="width: 100%;height: 250px" alt="">
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#?id=<?php echo $row['id'] ?>"><button class="bt1 btn-info">Edit</button></a>
                        <a href="#?id=<?php echo $row['id'] ?>"><button class="bt1 btn-info">Delete</button></a>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
</div>
<br><br>

<?php
include'include/footer.php';
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
