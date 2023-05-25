  <footer class="footer section" id="footer">
    <div class="section__content">
      <div class="footer__items">
        <div class="footer__items__menu">
          <?php 
            wp_nav_menu( 
              array(
                'theme_location' => 'top-menu',
              )
            );
          ?> 
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>