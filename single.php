<?php
global $post;

function console_log($data)
{ // сама функция
    if (is_array($data) || is_object($data)) {
        echo("<script>console.log('php_array: " . json_encode($data) . "');</script>");
    } else {
        echo("<script>console.log('php_string: " . $data . "');</script>");
    }
}
?>

<?php get_header(); ?>


<?php while (have_posts()) : ?>
  <?php the_post()?>
    <?php get_template_part( 'template-parts/content-post'); ?>
<?php endwhile ?>;







<?php get_footer(); ?>