<nav>

  <ul id="menu" class="u-floatleft clearfix">
    <li>
      <a href="<?php echo ($page->isHomePage()) ? '#muhit-nedir' : $site->url() . '#muhit-nedir'; ?>">Muhit Nedir?</a>
    </li>
    <?php 
    // loop through 'action' menu pages
    foreach($pages->visible() as $p): 
    if ($p->template() != 'action') :
    ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endif; endforeach; ?>
  </ul>
  
  <?php if (strlen($site->headeractions()) > 0): ?>
  <ul id="menu_action" class="u-floatleft clearfix">
    <?php foreach (yaml($site->headeractions()) as $action) : ?>
      <li>
        <a href="<?php echo $action['url'] ?>">
          <?php echo $action['text'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>

</nav>
