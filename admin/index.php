<?php
session_start();
if (!isset($_SESSION["Usuario"])) {
    header('location: ../index.php');
}
//$_SESSION["Usuario"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Index de Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
        include '../nav.php';
        include '../sidebar2.php';
    ?>
</body>

</html>
</?php echo date("Y"); ?>