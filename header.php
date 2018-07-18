<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Trocchi" rel="stylesheet">
        <title>My Recipes</title>
        <!-- ?php wp_enqueue_style( 'style', get_template_directory_uri() ); ?-->
        <?php wp_head(); ?>
        <!--IMPORTANT    Find a way to link CSS -->
    </head>
    <body>
        <header class="header">
            <div class="header-container">
                <div id="header-main">
                    <button id="social">Social media</button>
                    <p id="header-title">Recipes for you</p>
                    <button id="Subscribe">Subscribe</button>
                </div>
                <div class="header-links">
                    <div id="welcome">Welcome</div>
                    <div id="appetizers">Appetizers</div>
                    <div id"entrees">Entrees</div>
                    <div id="desserts">Desserts</div>
                    <div id="tips">Tips</div>
                    <div is="my-recipes">My recipes</div>
                </div>
            </div>
        </header>
