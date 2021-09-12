<?php
include "include/db.php";
?>
<?php
$id = $_GET['id'];
$q = mysqli_query($con,"delete from contact_2 WHERE id = '$id'");
if($q){
    echo '<script>
alert("Deleted Successfully..");
window.location ="contact_us.php";
</script>';
}
else{
    echo '<script>
alert("Error");
window.location ="Edit_con2.php";
</script>';

}