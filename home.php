<?php
session_start();
include('connect.php');

if (empty($_SESSION['id'])) {
    header('location: index.php');
    exit();
}

if (isset($_POST['btn1'])) {
    $pdate = $_POST['pdate'];
    $uid = $_POST['uid'];
    $uname = $_POST['uname'];
    $proid = $_POST['proid'];

    $stmt = $con->prepare("INSERT INTO purchase (pdate, uid, uname, proid) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $pdate, $uid, $uname, $proid);

    if ($stmt->execute()) {
        echo "<script>
            alert('Successfully purchased a new product.');
            window.location.href='home.php';
            </script>";
    } else {
        echo "<script>alert('Error purchasing product.');</script>";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Home Page</title>
    <?php include('bootcdn.php'); ?>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <div class="well">
            <span class="glyphicon glyphicon-home"> </span>
            <b> HOME PAGE</b>
        </div>

        <!-- Products starts -->
        <div class="row">
            <?php
            $sdata = mysqli_query($con, "SELECT * FROM products ORDER BY pid DESC");
            while ($row = mysqli_fetch_assoc($sdata)) {
            ?>
            <div class="col-sm-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <?php echo htmlspecialchars($row['title']); ?>
                    </div>
                    <div class="panel-body">
                        <img src="<?php echo 'admin/imgs/' . htmlspecialchars($row['photo']); ?>" width="100%" height="200px">
                        <b><p style="letter-spacing: 2px;"><?php echo htmlspecialchars($row['description']); ?></p></b>
                        <b><h3 style="letter-spacing: 1px;"><?php echo "PRICE: " . htmlspecialchars($row['price']); ?></h3></b>
                    </div>
                    <div class="panel-footer">
                        <form method="post">
                            <!-- hidden inputs starts -->
                            <input type="hidden" name="pdate" value="<?php echo date('Y-m-d'); ?>">
                            <input type="hidden" name="uid" value="<?php echo $_SESSION['id']; ?>">
                            <input type="hidden" name="uname" value="<?php echo htmlspecialchars($_SESSION['name']); ?>">
                            <input type="hidden" name="proid" value="<?php echo htmlspecialchars($row['pid']); ?>">
                            <!-- hidden inputs ends -->
                            
                            <button type="submit" class="btn btn-primary" name="btn1" style="border-radius: 20px;">Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- Products ends -->
    </div>
</body>
</html>
