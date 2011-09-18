<?php
// $Id$
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-<?php print $type; ?> clear-both">
  <?php print $picture; ?>

  <?php if (!$page): ?>
    <h2 class="node-title">
      <a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted; ?></div>
  <?php endif; ?>

  <div class="content">
    <?php print $content; ?>
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
