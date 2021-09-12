<?php
include "include/db.php";
?>
<?php
$id = $_GET['id'];
$q = mysqli_query($con,"delete from industry WHERE id = '$id'");
if($q){
    echo '<script>
alert("Deleted Successfully..");
window.location ="industry.php";
</script>';
}
else{
    echo '<script>
alert("Error");
window.location ="industry.php";
</script>';

}