<?php snippet('header') ?>

<main id="top">

  <section class="u-aligncenter">

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 u-alignleft u-mt20">
        <h3><?php echo $page->title() ?></h3>
      </div>
    </div>

  </section>

  <?php if (strlen($page->text()) > 0): ?>
  <section>

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">

        <?php echo kirbytext($page->text()) ?>

      </div>
    </div>

  </section>
  <?php endif; ?>

  <?php if (strlen($page->secondtext()) > 0): ?>
  <section>

    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">

        <?php echo kirbytext($page->secondtext()) ?>

      </div>
    </div>

  </section>
  <?php endif; ?>

  <?php if (strlen($page->features()) > 0): ?>
  <section class="usps">
    <div class="row u-aligncenter">
      <div class="col-xs-12">

        <?php foreach (yaml($page->features()) as $feature) : ?>
        <div class="col-sm-<?php echo $page->columns() ?>">
          <i class="ion-<?php echo $feature['icon'] ?> ion-5x"></i>
          <h4 class="u-mb10"><?php echo $feature['title'] ?></h4>
          <?php echo $feature['descr'] ?>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php snippet('footer') ?>