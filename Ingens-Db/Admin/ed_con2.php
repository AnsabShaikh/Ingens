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
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/fontawesome.css">
        <link rel="shortcut icon" href="images/IMG-20190730-WA0000.jpg" type="image/x-icon"/>
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

    <?php
    include"include/heading.php";
    ?>
    <div class="row bg-primary" style="width:101%;">k</div>

    <?php
    //include"include/header.php";
    include"include/db.php";
    ?>
    <body style="background-color: azure">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-12 col-lg-2">
                <a href="contact_us.php"><button class="bt1 btn-outline-info">Back</button></a>
            </div>
            <div class="col-md-10 col-sm-12 col-lg-10">

                <div class="container text-center">
                    <h1><label for="" class="txt">Edit Contact Details
                        </label></h1>

                </div>
                <hr>
                <?php
                $q = mysqli_query($con, "select * from contact_2 WHERE id='$id'");
                $row = mysqli_fetch_array($q);
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <label for="" class="l">Title of Contact</label>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <input type="text" class="in" name="name"  value="<?php echo $row['name']?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <label for="" class="l">Mobile Number</label>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <input type="number" class="in" name="mobile"  value="<?php echo $row['mobile']?>">
                        </div>
                    </div>

            </div>
        </div>
        <div class="col-md-1 col-sm-12 col-lg-1"></div>
        <div class="text-center mt-3">
            <button type="submit" name="submit" class="btn btn-info m-2"> Submit</button>
            <button type="reset" class="btn btn-info m-2"> Reset</button>
        </div>

    </div>
    </form>
    </div>
    <?php
    include'include/footer.php';
    ?>
    </body>
    </html>
<?php


if (isset($_POST['submit'])) {

    $i = $_POST['text'];
    $j = $_POST['mobile'];

    if ($id == "") {

        echo '<script>

alert("Failed To Update");
window.location = "Edit_con1.php";

</script>';


    } else {
        $query = mysqli_query($con, "update contact_2 set text='$i',mobile='$j' WHERE id='$id'");


        echo '<script>

alert("updated successfully..");
window.location = "contact_us.php";

</script>';
    }

}
?>