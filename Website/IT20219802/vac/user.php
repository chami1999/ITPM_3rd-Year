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
$page = "user";
require_once './includes/profile-header.php';
include './db/connection.php';
?>

<div class="container">
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        <th>Vaccine Status</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
      <tr>
                <?php
                $sql1 = "SELECT * FROM user_registrstion WHERE role='user'";
                $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                while ($row1 = mysqli_fetch_assoc($res1)) {
                ?>
                    <td><?php echo $row1['id']; ?></td>
                    <td><?php echo $row1['name']; ?></td>
                    <td><?php echo $row1['age']; ?></td>
                    <td><?php echo $row1['gender']; ?></td>
                    <td><?php echo $row1['phone']; ?></td>
                    <td><?php echo $row1['email']; ?></td>
                    <td><?php echo $row1['registration_date']; ?></td>
                    <td><?php echo $row1['vaccine_status']; ?></td>
                    <td style="text-align:center;"><a href="edit-user.php?id=<?php echo $row1['id']; ?>" style="text-align:center; color:#1b355c;">UPDATE</a></td>
                    <td style="text-align:center;"><a href="delete-user.php?id=<?php echo $row1['id']; ?>" onClick="return checkdelete()" style="text-align:center; color:red;">DELETE</a></td>
    
            </tr>
            <?php
                }
        ?>
                </tbody>
            </table>
        </div>
    </div>


<script type="text/javascript">
        function checkdelete() {
            return confirm('Are you sure you want to DELETE this record');
        }
</script>


<?php
require_once './includes/footer.php'
?>


