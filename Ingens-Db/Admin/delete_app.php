<?php
include "include/db.php";
?>
<?php
$id = $_GET['id'];
$q = mysqli_query($con,"delete from hot_job WHERE id = '$id'");
if($q){
    echo '<script>
alert("Deleted Successfully..");
window.location ="disp_app.php";
</script>';
}
else{
    echo '<script>
alert("Error");
window.location ="disp_app.php";
</script>';

}