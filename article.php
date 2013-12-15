<?php
/**
 * Template Name: Article
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
?>

  <div id="primary" class="site-content">
    <div id="content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
      <?php endwhile; // end of the loop. ?>

      <?php query_posts('posts_per_page=20&post_type=article&paged='.$paged); ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="abg-article">
            <div class="abg-article-image">
              <img class="abg-article-thumbs" src="<?php print_custom_field('image:to_image_src');?>" alt="?php the_title(); ?>">
            </div>
            <div class="abg-article-info">
              <div class="abg-article-info-texte">
                <h3 class="abg-article-titre"><?php the_title(); ?></h3>
                <p class="abg-description">
                  <?php print_custom_field('description');?>
                </p>
              </div>
              <div class="abg-article-prix-n">
                <span><b><?php print_custom_field('prix_normal'); ?></b></span>
              </div>
            </div>  
          </div>
        <?php endwhile; ?>
        <div id="abg-pagination"><?php my_pagination(); ?></div>
      <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>