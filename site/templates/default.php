<?php snippet('header') ?>

<main id="top">

  <section id="intro" class="u-aligncenter">

    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 u-mt20">
        <h3><?php echo $page->title() ?></h3>
      </div>
    </div>

  </section>

  <?php if (strlen($page->text()) > 0): ?>
  <section>

    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

        <?php echo kirbytext($page->text()) ?>

      </div>
    </div>

  </section>
  <?php endif; ?>

  <?php if (strlen($page->secondtext()) > 0): ?>
  <section>

    <div class="row">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

        <?php echo kirbytext($page->secondtext()) ?>

      </div>
    </div>

  </section>
  <?php endif; ?>

  <?php snippet('nextpage'); ?>

</main>

<?php snippet('footer') ?>