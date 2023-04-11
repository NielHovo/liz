<?php
/*
Template Name: Contact
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <title><?php the_title() ?></title>
    <link rel='stylesheet' href='../style.css'>
    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
    <?php get_header()?>
    <section id="contact">
    <?php echo do_shortcode('[contact-form-7 id="7" title="Kontaktformular 1"]'); ?>    </section>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>