<?php
// $Id$  
drupal_set_title('');
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-<?php print $type; ?> clear-both">
  <?php print $picture; ?>

<?php $pageParts = explode("SIDESKIFT", $content); ?>

  <div class="content">
	<div class="left"><?php print $pageParts[0] ?></div>
	<div class="right"><?php print $pageParts[1] ?></div>
  </div>

  <?php if (!empty($links)): ?>
    <div class="node-links clear-both">
      <?php print $links; ?>
      <div class="clear-both"><!-- --></div>
    </div>
  <?php endif; ?>

  <?php if ($terms): ?>
    <div class="terms clear-both"><div class="terms-inner">
      <?php print t('Tags') . '&#58; ' . $terms; ?>
    </div></div>
  <?php endif;?>
</div>
<div class="clear-both"><!-- --></div>
