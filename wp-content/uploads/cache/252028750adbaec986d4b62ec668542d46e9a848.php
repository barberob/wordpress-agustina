<header>
  <div class="menu">

    <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

  </div>
  <div class="top_container">
    <a data-cursor="accueil" href="/"><img src="<?= App\asset_path('images/thin-logo-black.svg'); ?>" alt="logo"></a>


    <div class="menu_button" data-cursor="menu" ></div>
  </div>
</header>

