<?php
// $Id$
?>
<div id="search">
  <?php $search['search_block_form'] = '<div class="form-item" id="edit-search-block-form-wrapper"><input type="text" maxlength="128" name="search_block_form" id="edit-search-block-form-1" size="15" value="' . t('Enter keywords..') . '" title="' . t('Enter keyword..') . '" onblur="this.value=this.value||this.defaultValue; this.style.color = \'#444\';" onfocus="this.value=\'\'; this.style.color = \'#444\';" class="form-text" /></div>'; ?>
  <?php print $search['search_block_form']; ?>
  <?php print $search['submit']; ?>
  <?php print $search['hidden']; ?>
</div>
