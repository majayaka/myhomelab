<?php
/* Template Name: Search */

get_header();
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
                    <h2>Search Results</h2>
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
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
                                    <a href="<?php echo get_permalink() ?>"><strong>Read more</strong></a>
                                </div>
                            </a>
                            <!--Grid column-->
                    <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo '<p>No search results found.</p>';
                    }
                    ?>
                </div>

                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php mdb_pagination(); ?>
</main>

<?php get_footer(); ?>