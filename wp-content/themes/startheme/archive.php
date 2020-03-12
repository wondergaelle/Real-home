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
$news = get_posts(array(
    'numberposts' => 3,
    'category_name' => 'actualites',
    'exclude' => $exclude
));
get_header();
?>

    <main class="archive">
        <?php if (have_posts()) : ?>
            <section class="archive-section container py-5">
                <h1 class="page-title text-center">Nos actualités</h1>
                <div class="container py-5">
                    <div class="row flex-md-row-reverse">
                        <aside class="col aside-categories mb-4">
                            <ul class="p-3">
                                <?php wp_list_categories(array(
                                    'child_of' => 4,
                                    'title_li' => '<h3>' . __('Catégories', 'startheme') . '</h3>',
                                )) ?>
                            </ul>
                            <ul class=" p-3">
                                <h3>Archives</h3>
                                <?php wp_get_archives(array(
                                    'type=yearly',
                                    'title_li' => '<h3>' . __('Archives', 'startheme') . '</h3>'
                                )) ?>
                            </ul>

                        </aside>
                        <div class="col-md-8 col-lg-9">
                            <div class="py-5 container-fluid">
                                <?php while (have_posts()) :
                                    the_post(); ?>
                                    <div class="py-4">

                                        <?php get_template_part('template-parts/content-archive', get_post_type()); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>

                            <?php the_posts_pagination(); ?>

                        </div>
                    </div><!-- .row flex-md-row-reverse -->
                </div> <!-- .container py-5 -->
            </section><!-- .archive-section -->
        <?php endif; ?>
    </main><!-- .archive -->
<?php get_footer(); ?>