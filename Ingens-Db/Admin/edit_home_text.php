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
<?php
$id = $_GET['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <script src="tin/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <style>
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
    <div class="row">
        <div class="col-md-2 col-sm-12 col-lg-2">
            <a href="home.php"><button class="bt1 btn-outline-info">Back</button></a>
        </div>
        <div class="col-md-10 col-sm-12 col-lg-10">

            <div class="container text-center">
                <h1><label for="" class="txt">Edit Home Text
                    </label></h1>
            </div>
            <hr>
            <form method="post">
                <?php
                $q = mysqli_query($con, "select * from text_home WHERE id='$id'");
                $row = mysqli_fetch_array($q);
                ?>
                <textarea id="mytextarea" name="txt">
            <?php echo $row['text'] ?>
        </textarea>

        </div>
    </div>
    <div class="col-md-1 col-sm-12 col-lg-1"></div>
    <div class="text-center mt-3">
        <button type="submit" name="submit" class="btn btn-info m-2"> Submit</button>
        <button type="reset" class="btn btn-info m-2"> Reset</button>
        </form>
    </div>

</div>
</form>
</body>
</html>

<?php


if (isset($_POST['submit'])) {


    $txt = $_POST['txt'];

    if ($id == "") {

        echo '<script>

alert("Failed To Update");
window.location = "edit_home_text.php";

</script>';


    } else {

        $query = mysqli_query($con, "update text_home set text='$txt' WHERE id='$id'");

        echo '<script>

alert("updated successfully..");
window.location = "home.php";

</script>';


    }

}
?>