<?php
include "include/db.php";
?>
<?php
$id = $_GET['id'];
$q = mysqli_query($con,"delete from education WHERE id = '$id'");
if($q){
    echo '<script>
alert("Deleted Successfully..");
window.location ="career_at.php";
</script>';
}
else{
    echo '<script>
alert("Error");
window.location ="Edit_education.php";
</script>';

}