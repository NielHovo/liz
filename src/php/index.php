<?php
/*
Template Name: Homes
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <title> <?php the_title() ?> </title>
    <link rel='stylesheet' href='./style.css'>
    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
    <?php get_header();?>
    <section id="hero">
        <div class="hero">
            <div class="call">
                <?php the_content()?>
                <button>Book your first session now</button>
            </div>
            <img src="images/liz.png" alt="liz">
        </div>
    </section>
    <section id="happiness">
        <img src="images/Title.png" id="title" alt="">
        <div class="level">
            <div class="number">1</div>
            <h2>Fitness</h2>
            <div class="flex">
                <p>One way to a healthy mind is throug ha healthy body.
                    I have put together courses for children that invite them
                    to stay fit whilst also enjoying the process. The combination
                    of FUN and FITNESS is what makes my programm unique.</p>
                <img src="images/fitness.png" alt="">
            </div>
            <button>Sign Up</button>
        </div>
        <div class="level">
            <div class="number">2</div>
            <h2>Reading</h2>
            <div class="flex">
                <p>What better way to challenge one’s mind then by engaging
                    with a fascinating story or reading a guide with helpful
                    advice! Reading will help your child develop the CALMNESS and MINDFULNESS they need to face this fast-paced world.</p>
                <img src="images/lotus.png" alt="">
            </div>
            <button>Explore Library</button>
        </div>
        <div class="level">
            <div class="number">3</div>
            <h2>Food & Diets</h2>
            <div class="flex">
                <p>The stomach is not only the fastest way to your heart, but also to good health. Being mindful about what you (or your child) eat can give your bodies the ENERGIE they need to successfully master whatever you desire to do. </p>
                <img src="images/diet.png" alt="">
            </div>
            <button>Get your Mealplan now</button>
        </div>
    </section>
    <div id="about">
        <div class="images">
            <img src="images/Liz2.png" id="img1" alt="">
            <img src="images/Text.png" id="img2" alt="">
        </div>
        <button>Get in Touch</button>
    </div>
    <section id="contact">
        <img src="images/teach.png" alt="">
        <div class="contacts">
            <h2>You share our Vision?
                Join the fun!</h2>
            <p>My Collegues and I are always looking for a helping hand (or two). If you love working with children as much as we do, we would LOVE to get to know YOU!</p>
            <button>Get in Touch</button>
        </div>
    </section>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>