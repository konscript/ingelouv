<?php
// $Id$
?>
<div id="comment-<?php print $comment->cid; ?>" class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; ?> clear-both">
  <div class="comment-t"><div class="comment-r"><div class="comment-b"><div class="comment-l"><div class="comment-tl"><div class="comment-tr"><div class="comment-br"><div class="comment-bl"><div class="comment-content">
    <?php print $picture; ?>

    <?php if ($comment->new): ?>
      <span class="new"><?php print $new; ?></span>
    <?php endif; ?>

    <h3 class="comment-title">
      <?php print $id . '&#46; ' . $title; ?>
    </h3>

    <div class="submitted">
      <?php print $submitted; ?>
    </div>

    <div class="content">
      <?php print $content; ?>

      <?php if ($signature): ?>
        <div class="user-signature clear-both">
          <?php print $signature; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php if (!empty($links)): ?>
      <div class="comment-links clear-both">
        <?php print $links; ?>
      </div>
    <?php endif; ?>
  </div></div></div></div></div></div></div></div></div>
</div>
