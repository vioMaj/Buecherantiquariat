<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<?php include ('inc/navigation.php') ?>
<?php include ('inc/inc.php');?>
<?php 
    session_destroy(); // Zerstören der aktuellen Sitzung, um den Benutzer auszuloggen
    header('Location: login.php'); // Umleiten zur Login-Seite
    exit; // Sicherstellen, dass kein weiterer Code ausgeführt wird
?>

<?php include ('inc/footer.php')?>
</body>
</html> 
