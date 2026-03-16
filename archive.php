<?php
get_header();

/* Template Name: BLOG */

require_once('components/navbar.inc.php');
?>

<main>
    <!-- hero blog -->
    <div class="hero-general d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center py-5">
                    <h6>What's new?</h6>
                    <h1 class="display-4">BLOG</h1>
                </div>
            </div>
        </div>
    </div>

    <!--Section: Article pickup-->
    <section id="result" class="d-flex">
        <div class="container py-1">
            <!--Grid row-->
            <div class="row">
                <div class="col-md-9">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'paged' => $paged,
                    );
                    $second_loop = new WP_Query($args);
                    $count = 0;
                    if ($second_loop->have_posts()) {
                        while ($second_loop->have_posts()) {
                            $second_loop->the_post();
                            $slug = $post->post_name;
                            ?>
                            <!--Grid column-->
                            <a href="<?php echo get_permalink(); ?>">
                                <div class="col-md-10 inner_grid my-2 py-2 card-effect w-100">
                                    <?php $tags = get_the_terms($post->ID, 'post_tag'); ?>
                                    <h4 class="my-2 font-weight-bold">
                                        <?php if ($tags) : ?>
                                            <strong><?php the_title(); ?></strong>
                                            <?php foreach ($tags as $tag) : ?>
                                                <span class="tag text-danger"><?php echo $tag->name; ?></span>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <strong><?php the_title(); ?></strong>
                                        <?php endif; ?>
                                    </h4>
                                    <p class=""><?php echo get_the_date(); ?></p>
                                    <p class="my-0"><?php the_excerpt(); ?></p>
                                    <a href="<?php echo get_permalink(); ?>"><strong>Read more</strong></a>
                                </div>
                            </a>
                            <!--Grid column-->
                    <?php
                            $count++;
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>

                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                <?php
                global $second_loop;
                $big = 999999999; // need an unlikely integer
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $second_loop->max_num_pages
                ));
                ?>
            </div>


        </div>
    </section>
</main>

<?php get_footer(); ?>