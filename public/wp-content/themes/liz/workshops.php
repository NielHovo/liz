<?php
/*
Template Name: Workshops
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ben Bäckt</title>
    <link rel='stylesheet' href='style.css'>
</head>
<?php wp_head();?>
<body>
<?php wp_body_open();?>
    <header>
        <div class="nav">  
            <a href="/">
                <h1>Ben bäckt</h1>
            </a>
            <nav id="mainnav">
            </nav>
        </div>
    </header>

    <main>
        <section id ="pastri">
            <img src="<?php echo get_template_directory_uri(); ?>/images/dekoL.png" alt="">
            <div class="pasta">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ben.png" alt="">
                <p>For People most acquainted with the Art of Bakery, we offer Bens' Bakin' MasterClass here</p>
                <a href="">Sign Up</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/dekoR.png" alt="">
        </section>
    </main>

    <footer>
        <div class="left">
            <h4>Thank you for your interest in Bakery!</h4>
            <p>© 2004 – 2023 Ben Bäckmann</p>
            <a href="#">Imprint & Privacy</a>
        </div>
    </footer>
    <script src='./main.js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
             MainNav.init();
        });
    </script>
</body>
<?php wp_footer();?>
<?php get_footer(); ?>
</html>