<?php
session_start();
if (!isset($_SESSION["user"])) {
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<?php
require_once './includes/profile-header.php';
include './db/connection.php';

?>

    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div>
    <!--Container Main end-->


