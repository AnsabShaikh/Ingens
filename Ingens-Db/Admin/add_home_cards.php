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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingens</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <style>
        .for{
            display: block;
            width: 80%;
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

<?php
include"include/heading.php";
?>
<div class="row bg-primary" style="width:101%;">k</div>
<?php
//include"include/header.php";
include"include/db.php";
?>
<br>
<body style="background-color:#f0ffff">
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-lg-2">
            <a href="home.php"><button class="bt1 btn-outline-info">Back</button></a>
        </div>
        <div class="col-md-10  col-sm-12 col-lg-10">
            <h3 class="txt">Add Details About The Services</h3>
        </div>
    </div>
</div>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-12 col-lg-10">
            <form action="" class="for" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label class="l" for="">Upload Image</label>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <input type="file" name="image_file" class="s" multiple="multiple">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label class="l" for="">Enter Title of the Service</label>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <input type="text" name="title_text"  class="in"  placeholder="Enter Title of the Service">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label class="l" for="">Enter Some data about the Service <br>
                        (maximum 200 words)</label>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <input type="text" name="text" class="in" placeholder="Enter Some data about the Service">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label class="l" for="">Enter the Link For the services</label>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <input type="text" class="in" name="link" placeholder="Enter Link For the Services">
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

    $upload = $_FILES['image_file']['name'];
    $tmp_name = $_FILES['image_file']['tmp_name'];
    $location = '../uploads/';
    move_uploaded_file($tmp_name, $location . $upload);
    $a = $_POST['title_text'];
    $b = $_POST['text'];
//    $e = $_POST['sci_name'];
//    $f = $_POST['desg'];
//    $g = $_POST['addr'];
//    $h = $_POST['email'];
    $i = $_POST['link'];

    if ($a == "" || $b == "" || $upload == "") {

        echo '<script>
        alert("All fields are required...!");
        window.location = "add_home_cards.php";
        //document.f1.email.focus();
         </script>';
    }
    else
    $q = mysqli_query($con, "insert into home_card(image_file, title_text, data_text, more_link) VALUES('$upload','$a','$b','$i') ");
    if ($q)
    {
        echo '<script>
                alert("Data Uploaded Successfully");
                window.location = "home.php";

                </script>';
    }
    else
    {
        echo '<script>
                alert("Error in Data Uploading");
                window.location = "add_home_cards.php";
                </script>';
    }
}

?>
