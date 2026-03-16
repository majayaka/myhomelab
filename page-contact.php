<?php

/**
 * Template Name: CONTACT
 *
 */

get_header();

require_once('components/navbar.inc.php'); ?>

<main>
    <!-- hero -->
    <div class="hero-general d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center pt-5 pb-1">
                    <h6>GET IN TOUCH</h6>
                    <h1 class="display-4">CONTACT</h1>
                </div>
            </div>

            <!-- Contact  -->
            <section id="contact">
                <div class="container mx-auto">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center py-5">
                            <?php echo do_shortcode('[contact-form-7 id="15" title="contact1"]'); ?>
                        </div>
                    </div>
                </div>
            </section>


            <?php get_footer(); ?>