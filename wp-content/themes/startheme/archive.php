<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 *
 */

get_header();
?>

    <main>

        <?php if (have_posts()) : ?>

            <section class="archive-section container py-5">

                <h1 class="page-title"><?php the_archive_title(); ?></h1>

                <div class="row">

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-6 col-lg-4 my-3">

                            <?php get_template_part('template-parts/content-archive', get_post_type()); ?>

                        </div>

                    <?php endwhile; ?>

                </div><!-- .row -->
                <nav aria-label="Page-navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><?php the_posts_pagination(); ?></li>
                    </ul>
                </nav>

            </section>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main>

<?php get_footer() ?>