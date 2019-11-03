<header class="container-fluid myheader">
    <nav class="mynavbar row">
        <div class="logo" style="width: auto">
            <a href="index.php" style="text-decoration: none; color: #649EF3">
                <img id="logo" src="_photos/logo.jpg" alt="logo">
                <h4>OczkoTrenera</h4></a>
        </div>
        <div class="media_header media" style="width: auto;">
            <a href="#fb" class="d-inline-block float-right ml-3"><h3><i class="fab fa-facebook-square"></i></h3></a>
            <a href="#insta" class="d-inline-bloc float-right ml-3"><h3><i class="fab fa-instagram"></i></h3></a>
            <a href="#mail" class="d-inline-block float-right ml-3"><h3><i class="fas fa-envelope"></i></h3></a>
            <a href="#yt" class="d-inline-block float-right ml-3"><h3><i class="fab fa-youtube"></i></h3></a>
        </div>
        <div class="mymenu">
            <ul>
                <?php
                $result = $db->query("select id, title, photo from description;");
                if ($result->rowCount()) {
                    while ($data = $result->fetch()) {
                        ?>
                        <li class="d-inline-block"><a class="nav-link <?php echo $data['id'] ?>" href="#" onclick="slidedown('<?php echo $data['id'] ?>')"><h3 class="menu_bigger"><?php echo $data['title']; ?></h3><h3 class="menu_smaller"><?php echo $data['photo'] ?></h3></a></li>
                                    <?php
                                }
                            }
                            ?>
            </ul>
        </div>
    </nav>
</header>