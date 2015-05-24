<div class="row u-aligncenter">
  <div class="col-sm-12">

    <?php foreach (yaml($p->features()) as $feature) : ?>
    <div class="col-sm-<?php echo $p->columns() ?>">
      <i class="ion-<?php echo $feature['icon'] ?> ion-5x"></i>
      <h4 class="u-mb10"><?php echo $feature['title'] ?></h4>
      <?php echo $feature['descr'] ?>
    </div>
    <?php endforeach; ?>

  </div>
</div>