<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/dirs.php');
require_once(PARTIALS_PATH . "verify_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/font-awesome/font-awesome.min.css">
</head>

<body>
    <?php include(PARTIALS_PATH . "navbar.php") ?>

    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/vendor/bootstrap/js/tooltip.js"></script>
    <script src="/vendor/bootstrap/js/popper.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/notify/bootstrap-notify.js"></script>
    <script>
        $.get('/api/get_products.php', (data, status) => {
            console.log(data)
        })
    </script>
</body>

</html>