<?php snippet('header') ?>

<main id="top">

	<?php
  // create loop through all visible pages
  foreach( $pages->visible() as $p ) :
  ?>

  <section <?php echo "id=\"" . $p->slug() . "\""; echo ($p->template() == "action") ? " class=\"action\"" : "" ; ?>>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 u-aligncenter u-mb10">
        <h6><?php echo html($p->title()); ?></h6>
      </div>
    </div>

    <?php
    // if template is 'features', generate columns from list items
    if ($p->template() == "features" || $p->template() == "custom"):
      include('features.php');
    endif;
    ?>

    <?php
    // two column layout
    if(kirbytext($p->secondtext()) && kirbytext($p->text())):
    $start_string = "<figure";
    $end_string = "</figure>";
    if (
      substr(kirbytext($p->secondtext()), 0, strlen($start_string)) === $start_string &&
      substr(kirbytext($p->secondtext()), -strlen($end_string)) === $end_string
      ) {
      // it's an image. But I'm not using this functionality now
    }
    $col = ($p->layoutwidth() == 'small') ? "col-sm-5" : "col-sm-6";
    ?>
    <div class="row">
      <?php echo ($p->layoutwidth() == 'small') ? '<div class="col-sm-1"></div>' : ''; ?>
      <div class="<?php echo $col; ?>">
        <p><?php echo kirbytext($p->text()); ?></p>
      </div>
      <div class="<?php echo $col; ?>">
        <p><?php echo kirbytext($p->secondtext()); ?></p>
      </div>
    </div>
    <?php 
    // one column layout
    else:
    $col = ($p->layoutwidth() == 'small') ? "col-sm-10 col-sm-offset-1" : "col-sm-12";
    ?>
    <div class="row">
      <div class="<?php echo $col; ?>">
        <p><?php echo kirbytext($p->text()); ?></p>
        <p><?php echo kirbytext($p->secondtext()); ?></p>
      </div>
    </div>
    <?php endif; ?>

    <?php if(kirbytext($p->message())): ?>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="well u-mt20"><?php echo kirbytext($p->message()); ?></div>
        </div>
      </div>
    <?php endif;?>

  </section>

  <?php
  endforeach;
  ?>

</main>

<?php snippet('footer') ?>