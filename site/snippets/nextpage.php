<?php if($page->isHomePage()):
$next = $pages->visible()->first();
?>
<?php elseif($page->hasNextVisible()): ?>
  <?php $next = $page->next(); ?>
<?php endif ?>

<?php if(isset($next)):?>
<section class="u-pv40">
  <div class="row">
    <div class="col-xs-12 u-aligncenter">
      <a href="<?php echo $next->url() ?>" class="btn btn-blue">
        <?php echo $next->title() ?>
        <i class="ion ion-arrow-right-c u-ml5"></i>
      </a>
  </div>
</section>
<?php endif ?>
