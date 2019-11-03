<div class="content container-fluid pt-5">
    <div class="row">
        <!-- ********************** -->
        <!-- MESSENGER CHAT -->
        <!-- ********************** -->
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    xfbml: true,
                    version: 'v4.0'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your customer chat code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="114046752635627"
             theme_color="#D9D9D9"
             logged_in_greeting="Hi! How can we help you? This is temporary chat!"
             logged_out_greeting="Hi! How can we help you? This is temporary chat!">
        </div>
        <!-- ********************** -->
        <!-- END MESSENGER CHAT -->
        <!-- ********************** -->
        <?php
        $result = $db->query("select id, title, content from description");
        if ($result->rowCount()) {
            while ($data = $result->fetch()) {
                ?>
                <div id="<?php echo $data['id'] ?>" class = "col-md-8 ml-auto mr-auto description">
                    <h1><?php echo $data['title'] ?></h1>
                    <p><?php echo $data['content'] ?></p>
                </div>
                <div class="hdivider col-11 col-md-7 m-auto">
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>