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

        /* styles for this sample only */
        *{ margin: 0; padding: 0; }
        body { height: 800px; font-size: 16px; font-family: 'Exo 2', sans-serif; background: azure; color: #555; }
        .header { text-align: center; }
        .header a { padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; }
        /*.header p { margin: 10px 0 40px 0; font-size: 18px; }*/
        .p1{
            padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; margin: 10px 0 40px 0
        }
        .container { max-width: 1200px; margin: 0 auto; }
        /* styles for this sample only */
        .for{
            display: block;
            width: 80%;
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
        .l{
            margin-left: 35%;
        }
        .m{
            margin-top: 10px;
        }

        .in {
            display: block;
            width: 300px;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
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
        .txt{
            margin-top: 20px;
            /*font-size: 26px;*/
            text-align: center
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
<div class="row bg-primary" style="width:101%;">k</div>
<?php
//include"include/header.php";
include"include/db.php";
?>
<body style="background-color:azure">
<div class="container">
    <div class="row">
        <div class="col-md-2 col-sm-12 col-lg-2">
            <a href="career_at.php"><button class="bt1 btn-outline-info">Back</button></a>
        </div>
        <div class="col-md-10  col-sm-12 col-lg-10">
            <h1 class="txt">Add Education Requirement Details</h1>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-12 col-lg-10">
            <form action="" class="for" method="post" enctype="multipart/form-data">
                <div class="m row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <label class="l" for="">Education Requirement</label>
                    </div>
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <input type="text" name="text" class="in"  placeholder="Education Requirement">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" name="add" class="btn btn-info m-2"> Submit</button>
                    <button type="reset" class="btn btn-info m-2"> Reset</button>
                </div>
            </form>
        </div>
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
<?php
if(isset($_POST['add'])){

    $a = $_POST['text'];
    if ($a == "") {

        echo '<script>
                alert("All fields are required...!");
                window.location = "add_education.php";
                //document.f1.email.focus();
              </script>';
    }
    else


    $q = mysqli_query($con, "insert into education(text) VALUES('$a') ");
    if ($q)
    {
        echo '<script>
                alert("Data Uploaded Successfully");
                window.location = "career_at.php";

                </script>';
    }
    else
    {
        echo '<script>
                alert("Error in Data Uploading");
                window.location = "add_education.php";
                </script>';
    }
}

?>
