<nav>

  <ul id="menu" class="clearfix">
    <?php 
    // loop through 'action' menu pages
    foreach($pages->visible() as $p): 
    if ($p->template() != 'action') :
    ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo '#' . $p->slug() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endif; endforeach; ?>
  </ul>

  <ul id="menu_action" class="clearfix">
  	<?php 
  	// loop through 'normal' menu pages
  	foreach($pages->visible() as $p): 
  	if ($p->template() == 'action') :
		?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo '#' . $p->slug() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endif; endforeach; ?>
  </ul>

</nav>
