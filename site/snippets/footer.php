  <footer>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-md-3 u-mb20">

        <ul style="list-style: none;">
          <?php
          foreach($pages->visible() as $p): 
          if ($p->template() != 'action') :
          ?>
          <li>
            <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
          <?php endif; endforeach; ?>
        </ul>

      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 u-mb20">

        <ul style="list-style: none;">
          <?php
          foreach(['raporlar','fikir-haritalari','nasil-yapilir','kullanim-kosullari'] as $slug):
          $p = $pages->find($slug);
          ?>
          <li>
            <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
          <?php endforeach ?>
        </ul>

      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 u-aligncenter u-mb20">
        <a href="https://play.google.com/store/apps/details?id=co.muhit" target="_blank"><? snippet('play-store-button') ?></a>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3 u-alignright">

        <?php foreach ($site->headeractions()->toStructure() as $action) : ?>
          <a href="<?php echo $action->url() ?>" class="btn u-mb10">
            <?php echo $action->text()->html() ?>
          </a>
        <?php endforeach ?>

        <?php echo kirbytext($site->copyright()) ?>

      </div>
    </div>
  </footer>

</body>
</html>