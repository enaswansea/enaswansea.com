  </div id="content"> 

  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

    <p class="footer-copyright">
    <?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->html())
      ?></p>
    
    </div>
  </footer>

  <?php snippet('browsersync') ?>

</body>
</html>
