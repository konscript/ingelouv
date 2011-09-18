<?php
// $Id$
?>
<div id="comments">
  <?php if ($node->comment == 1 || $node->comment == 2): ?>
    <?php if ($node->comment_count == 0): ?>
      <h3 class="comments-title"><?php print t('No responses to') . ' &#34;' . $node->title . '&#34;'; ?></h3>
    <?php elseif ($node->comment_count == 1): ?>
      <h3 class="comments-title"><?php print t('1 response to') . ' &#34;' . $node->title . '&#34;'; ?></h3>
    <?php else: ?>
      <h3 class="comments-title"><?php print $node->comment_count . ' ' . t('reponses to') . ' &#34;' . $node->title . '&#34;'; ?></h3>
    <?php endif; ?>
  <?php endif; ?>

  <div id="comments-content">
    <?php print $content; ?>
  </div>
</div>
