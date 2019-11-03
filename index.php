<?php
require_once 'connect_db.php';

$result = $db->query("select id, title, photo from description;");
$qtt = 0;
$qtt = $result->rowCount();
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <meta HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MeshCoach</title>
        <?php require 'links_head.php'; ?>
        <script>
            window.onscroll = function () {
                activate(<?php echo $qtt ?>);
            };
            /*
            $(document).ready(function () {
                links_decoration();
            });
            */
        </script>
    </head>
    <body>
        <div id="mybody">
            <?php require '_header/menu.php'; ?>
            <?php require '_content/content.php'; ?>
            <?php require '_footer/footer.php'; ?>
            <?php require 'links_end.php'; ?>
        </div>
    </body>
</html>
