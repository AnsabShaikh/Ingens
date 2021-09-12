<?php
include "include/db.php";
?>
<?php
$id = $_GET['id'];
$q = mysqli_query($con,"delete from home_card WHERE id = '$id'");
if($q){
    echo '<script>
alert("Deleted Successfully..");
window.location ="home.php";
</script>';
}
else{
    echo '<script>
alert("Error");
window.location ="home.php";
</script>';

}