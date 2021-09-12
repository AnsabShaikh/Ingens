<?php
include "include/db.php";
?>
<?php
$id = $_GET['id'];
$q = mysqli_query($con,"delete from job WHERE id = '$id'");
if($q){
    echo '<script>
alert("Deleted Successfully..");
window.location ="hot_jobs.php";
</script>';
}
else{
    echo '<script>
alert("Error");
window.location ="hot_jobs.php";
</script>';
}