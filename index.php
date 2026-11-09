
<?php 
get_header(); 
?>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>   

<main>
<?php if (have_posts(  )): ?>
        <?php while (have_posts(  )): ?>
            <?php the_post(); ?>
            <article>
                <h2>
                    <a href= "<?php echo esc_url(get_permalink()); ?>">
                    <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>

<?php else: ?>
    <p>Keine Inhalte gefunden</p>
<?php  endif;?>
</main>
<?php
get_footer();
?>