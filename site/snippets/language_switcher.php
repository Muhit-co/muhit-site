<div id="language_switcher">
  <div class="row u-alignright">
    <div class="col-xs-12">
      <?php
      $i = 0;
      foreach ($site->languages() as $language):
        // separating dash
        if ($i > 0) { echo ' &mdash; '; };
        // outputs language – with link if it's not the current language
        $lang = html($language->code());
        if ($language != $site->language()):
          echo '<a href="'. $page->url($language->code()) . '">';
          echo $lang;
          echo '</a>';
        else:
          echo $lang;
        endif;
        $i++;
      endforeach; 
      ?>
    </div>
  </div>
</div>