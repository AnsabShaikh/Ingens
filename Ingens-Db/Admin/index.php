<?php
session_start();//session starts here
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ingens</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stellarnav.css">
    <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/fontawesome.css"/>
    <style>
        .for{
            display: block;
            width: 60%;
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
        .r{
            width: 300px;
        }
        .p1{
            padding: 30px 0 0; display: block; font-size: 48px; text-decoration: none; color: #555; margin: 10px 0 40px 0
        }
    </style>
</head>
<?php
include 'include/db.php';
?>
<?php
include"include/heading.php";
?>
<body style="background-color: azure">
<div class="container">
    <br><br><br><br>
    <h1>Admin Login</h1>
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample">Click Here for Admin Login</button>
    </p>
    <div class="collapse" id="collapseExample">
        <form class="for" action="" method="post" enctype="multipart/form-data">
            <br>

            <div class="row">
                <div class="col-sm-3"><label for="" style="font-size: 18px">Username</label></div>
                <br>

                <div class="col-sm-3"><input type="text" name="username" placeholder="Username" class="form-control r"></div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-3"><label for="" style="font-size: 18px">Password</label></div>
                <br>

                <div class="col-sm-3"><input type="password" class="r form-control" name="password" placeholder="Password"></div>
            </div>
            <br>
            <input type="submit" name="login" class="btn btn-primary" value="Login">

        </form>
    </div>
</div>
<br><br><br><br><br><br>
<?php
include 'include/footer.php';
?>
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

<?php
if (isset($_POST['login'])) {
//    session_start();
    $user = $_POST['username'];
    $password = $_POST['password'];


    if ($user == "" || $password == "") {

        echo '<script>

    alert("All fields are required...!");
    window.location = "index.php";

</script>';
    } else {


        $q = mysqli_query($con, "select * from admin_login WHERE username = '$user' and password = '$password' ");

        if ($q) {

            $result = mysqli_num_rows($q);

            if ($result == 1) {

//                session_start();
//                $_SESSION['username']=$user;
//                include"home.php";

                echo '<script>

    alert("Login successfully");
    window.location = "home.php";

</script>';

//                session_start();
////                $_SESSION['sid']=session_id();
//                $_SESSION['username'];
//                header("location:home.php");
//                $_SESSION['sid']=session_id();
//                header("location:home.php");
//                $_SESSION['usr']="123";

                $_SESSION['username']=$user;

               } else {
                echo '<script>

    alert("Please enter valid username and password");
    window.location = "index.php";

    </script>';
            }


        }


    }


}

?>