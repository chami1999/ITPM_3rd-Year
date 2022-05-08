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
$page = "staff";
require_once './includes/profile-header.php';
include './db/connection.php';
?>


<?php
require_once './includes/footer.php'
?>