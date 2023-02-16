<?php
/**
 * Modèle single.php représente le modèle utilisé pour afficher un article à la fois
 */
    get_header()
?>

<main>
    <h3>index.php</h3>
	<?php
        if (have_posts()):
            while (have_posts()) : the_post();
                the_title('<h1>','</h1>');
                the_permalink();
    ?>

                <h1><a href="<?php the_permalink(); ?>"><?php get_the_title(); ?></a></h1>

    <?php
                echo wp_trim_words(get_the_excerpt(), 4);
            endwhile;
        endif;
	?>
</main>

<?php get_footer(); ?>