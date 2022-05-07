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
$page = "dashboard";
require_once './includes/profile-header.php';
include './db/connection.php';
?>



<script type="text/javascript">
        function checkdelete() {
            return confirm('Are you sure you want to DELETE this record');
        }
</script>


<?php
require_once './includes/footer.php'
?>


