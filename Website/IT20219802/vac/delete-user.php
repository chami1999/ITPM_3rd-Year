<?php
session_start();
if(!isset($_SESSION["user"])){
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<?php
include "./db/connection.php";
$id=$_GET['id'];
$sql = "DELETE FROM user_registrstion WHERE id='$id'";
mysqli_query($conn, $sql);
?>

<script type="text/javascript">
    window.location = "user.php";
</script>