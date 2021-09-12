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
    <title>Ingens</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
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

<div class="row" id="t" style="background-color: lavender">
    <div class="col-sm-2">
        <img src="images/IMG-20190730-WA0000.jpg" style="height:100px;margin:30px" alt="">
    </div>
    <div class="col-sm-10" style="padding: 0px">
        <strong>
            <p class="" style="display: block; font-size: 48px; text-decoration: none; color: #0069d9; margin: 40px 0 40px 0;font-family:'Josefin Sans' ">Ingens Management Services Pvt.Ltd </p>
        </strong>
    </div>
</div>
<?php
//include"include/header.php";
include"include/db.php";
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-lg-2">
            <a href="home.php"><button class="bt1 btn-outline-info">Back</button></a>
        </div>
        <div class="col-md-10 col-sm-12 col-lg-10">
            <h3 class="txt">Add Slider Image</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-lg-2"></div>
        <div class="col-md-10 col-sm-12 col-lg-10">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="" class="l">Upload Image</label>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <input type="file" class="s" name="file1">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" name="add" class="btn btn-info m-2"> Submit</button>
                    <button type="reset" class="btn btn-info m-2"> Reset</button>
                </div>
            </form>
        </div>
        <div class="col-md-2 col-sm-12 col-lg-2"></div>

    </div>
</div>

<?php
include'include/footer.php';
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php
if(isset($_POST['add'])){
//    $file1 = $_FILES['file1']['name'];
//    $tmp_name1 = $_FILES['file1']['tmp_name1'];
//    $location = 'image/';
//    move_uploaded_file($tmp_name1, $location . $file1);
    $name = $_FILES['file1']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . $_FILES["file1"]["name"];
    if(move_uploaded_file($_FILES['file1']['tmp_name'],$target_file)){
    $q = mysqli_query($con,"insert into slider(image) VALUES('$name') ");
        echo '
        <script>
        alert("Data Uploaded Successfully");
        window.location = "home.php";

        </script>';
    }
    else{
        echo'
        <script>
        alert("Error");
        window.location = "add_slider.php"
</script>';
    }
}
?>
