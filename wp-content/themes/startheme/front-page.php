<?php
/**
 * The template file for front page
 *
 * ...
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 *
 */

get_header();
?>

    <header class="entry-header main-header py-5">
        <div class="container">
            <h1 class="page-title entry-title text-white"><?php the_title(); ?></h1>
        </div>
    </header>

    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', 'front-page');
        endwhile;
        endif; ?>
    </main>


<?php get_sidebar('nos_proprietes') ?>

<?php get_footer(); ?>