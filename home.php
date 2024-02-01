<?php get_header();?>
  <main>

    <div>
    <img src="<?php echo get_template_directory_uri(); ?>/bicyclemain.jpg" class="bicycle"  />
    </div>

    
    <h1 id="about">About</h1>
    <section class="about">
    <img src="<?php echo get_template_directory_uri(); ?>/profile.jpg" class="profile"  />
      <div class="content">
        <p class="name">KAKERU MIYAICHI</p><br>
        <p>テキストテキストテキストテキストテキストテキストテキスト</p><br>
        <p>テキストテキストテキストテキストテキストテキストテキスト</p><br>
        <p>テキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </section>

    <h1 id="bicycle">Bicycle</h1>
    <section class="bicycle">
      <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/left.jpg" />
        <p>テキストテキストテキスト</p>
      </div>

      <div class="item item_senter">
      <img src="<?php echo get_template_directory_uri(); ?>/center.jpg" />
        <p>テキストテキストテキスト</p>
      </div>

      <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/right.jpg" />
        <p>テキストテキストテキスト</p>
      </div>
    </section>
    
  </main>
  <?php get_footer(); ?>
 