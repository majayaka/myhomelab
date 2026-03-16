<!-- side bar -->
<aside id="sidebar">

  <section class="archive my-2">
    <h4 class="h5">Categories</h4>
    <ul>
      <?php wp_list_categories('title_li='); ?>
    </ul>

    <h4 class="h5">Recent Posts</h4>
    <ul class="">
      <?php
      $recent_posts = wp_get_recent_posts(array(
        'post_type' => 'post',
        'numberposts' => 5,
        'post_status' => 'publish'
      ));
      foreach ($recent_posts as $recent) : ?>
        <li><a href="<?php echo get_permalink($recent['ID']); ?>"><?php echo $recent['post_title']; ?></a></li>
      <?php endforeach; ?>
    </ul>

    <?php
    $search_text = 'Rechercher';
    get_search_form(true, $search_text);
    ?>

  </section>



  <section class="author">
    <div class="inner_grid_side w-100 py-3 px-2">
      <img decoding="async" src="<?php echo esc_url(get_theme_file_uri('img/linkedin-profile.webp')); ?>" alt="Ayaka, Web developer">
      <h5 class="h6">Who am I?</h5>
      <h3 class="h5 ">Ayaka Yumoto</h3>
      <p class="mt-4 text-left text-justify">
        I'm Ayaka Yumoto, a Japanese DevOps developer. My journey in the web industry began in 2014 when I joined a company that handled e-commerce for French brands, catering to Japanese clients using platforms like Magento, Wordpress, Mailchimp, and Google Analytics. Along the way, I also worked in a diplomatic role. However, after getting married and having young children, I desired a lifestyle in the countryside with clean air and the flexibility to work from home on web projects. With that goal in mind, I made the decision to leave Paris and enroll in a vocational training school for web development. During my studies, I delved into coding and gained valuable knowledge about SEO. Nowadays, I work as a DevOps developer and also as freelance web developer, offering my services to clients. This allows me to enjoy the freedom and independence that comes with remote work while leveraging my skills in both web marketing and development.
      </p>
    </div>
  </section>


</aside>