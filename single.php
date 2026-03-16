<?php get_header();

/* Template Name: BLOG single page */

require_once('components/navbar.inc.php'); ?>

<main>


    <!--Section: Main Article-->
    <section id="article" class="d-flex">

        <div class="container single-post-container py-1">

            <div class="breadcrumb-wrapper my-2">
                <div class="container-fluid">
                    <ul class="list-unstyled d-flex">
                        <li class="ml-2"><a href="<?php echo esc_url(home_url()); ?>">TOP</a></li>
                        <p class="ml-2">></p>
                        <li class="ml-2"><a href="<?php echo esc_url(home_url('/blog')); ?>">BLOG</a></li>
                        <p class="ml-2">></p>
                        <li class="ml-2"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-md-9">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <!--Section: Article-->
                            <article class="single-post-wrap">
                                <div class="font-weight-bold entry-header mt-2">
                                    <div class="title-meta-wrap">
                                        <ul class="meta-list list-unstyled d-flex">
                                            <li class="meta date">
                                                Updated on <?php echo get_the_date(); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="thum-wrap text-center mt-4">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                    <?php endif; ?>
                                </div>
                                <div class="content-wrap entry-content mt-4">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <!--Section: Article-->

                    <?php endwhile;
                    endif; ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>



        </div>
    </section>
</main>
<!--Main layout-->

<?php get_footer(); ?>