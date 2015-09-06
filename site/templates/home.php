<?php snippet('header') ?>

<main id="top">

  <?php
  $coverimg = (string)$page->coverimage();
  $style = ($img = $page->image($coverimg)) ? 'style="background-image: url(\'' . $img->url() . '\')"' : '';
  ?>

  <section id="intro" class="u-relative" <?php echo $style ?>>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 u-aligncenter u-mt40">
        <div class="c-white">
          <?php echo $page->blurb()->kirbytext(); ?>
        </div>
      </div>
    </div>
  </section>

  <?php if (strlen($page->features()) > 0): ?>
  <section class="usps">
    <div class="row u-aligncenter">
      <?php foreach (yaml($page->features()) as $feature) : ?>
      <div class="col-sm-<?php echo $page->columns() ?>">
        <i class="ion-<?php echo $feature['icon'] ?> ion-5x"></i>
        <h4 class="u-mb10"><?php echo $feature['title'] ?></h4>
        <?php echo $feature['descr'] ?>
      </div>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>

  <section id="muhit-nedir">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <?php echo kirbytext($page->secondtext()); ?>
      </div>
    </div>
  </section>

  <?php snippet('nextpage'); ?>

  <section id="iletisim">
    <?php snippet('mailchimp_form'); ?>
  </section>

</main>

<?php snippet('footer') ?>