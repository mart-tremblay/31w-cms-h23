<?php
    /**
     * Modèle front-page.php représente le modèle par défaut affiché à l'accès de l'url de votre site
     */

    get_header()
?>

<main>
    <code>page Front-page</code>
    <h3>front-page.php</h3>
	<?php
        if (have_posts()):
            while (have_posts()) : the_post();
                //the_title('<h1>','</h1>');
                //the_permalink();
    ?>
                <h1><a href="<?php the_permalink(); ?>"><?= get_the_title();  ?> </a></h1>

    <?php
                // the_content();
                // the_excerpt();
                echo wp_trim_words(get_the_excerpt(), 4);
            endwhile;
        endif;
	?>
</main>
<?php get_footer(); ?>
