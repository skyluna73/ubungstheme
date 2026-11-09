
<?php 
get_header(); 
?>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>   

<?php
if (have_posts(  )) {
    while (have_posts()){
        the_post(  );
        echo '<h2>'; 
            echo '<a href="';
            echo esc_url(get_permalink());
            echo'">';
            the_title();
            echo'</a>';
 
        echo '</h2>';
        the_content();
    }   
}else {
    echo '<p> Keine Inhalte gefunden </p>';
}


get_footer();
?>