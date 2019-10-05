<?php
if (isset($_GET['err'])) {
    $err = $_GET['err'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ERROR</title>
        <?php require 'links_head.php'; ?>
    </head>
    <body>
        <div class='error' style="height: 100%;">
            <a href="index.php"><h3>ODŚWIEŻ</h3></a>
            <h1>Error! Przepraszamy za utrudnienia! Spróbuj później</h1>
            <h6><?php echo $err ?></h6>
        </div>
        <?php require 'links_end.php'; ?>
    </body>
</html>
