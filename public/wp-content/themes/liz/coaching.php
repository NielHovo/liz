<?php
/*
Template Name: Coack
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
    <section id="coaching">
    <?php
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => 3
        );
        $the_query = new WP_Query( $args );
        
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<div class="course"><h2>' .  get_the_title() . '</h2>' ;
                echo the_content() . '<button>' . get_post_custom_values( 'buttontext' )[0] .'</button></div>';
            }
        } else {
            echo 'Derzeit keine Kurse verfügbar';
        }
        wp_reset_postdata();
    ?>
    </section>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>