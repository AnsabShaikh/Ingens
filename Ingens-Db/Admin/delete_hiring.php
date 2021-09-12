<?php
include "include/db.php";
?>
<?php
$id = $_GET['id'];
$q = mysqli_query($con,"delete from hiring WHERE id = '$id'");
if($q){
    echo '<script>
alert("Deleted Successfully..");
window.location ="career_at.php";
</script>';
}
else{
    echo '<script>
alert("Error");
window.location ="Edit_hiring.php";
</script>';

}