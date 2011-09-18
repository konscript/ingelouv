<?php
// $Id$
?>
<div id="search">
  <?php $search['search_theme_form'] = '<div class="form-item" id="edit-search-theme-form-1-wrapper"><input type="text" maxlength="128" name="search_theme_form" id="edit-search-theme-form-1" size="15" title="" value="' . t('Enter keyword..') . '" onfocus="if(this.value==\'' . t('Enter keyword..') . '\'){this.value=\'\';}" onblur="if(this.value==\'\'){this.value=\'' . t('Enter keyword..') . '\';}" class="form-text" /></div>'; ?>
  <?php print $search['search_theme_form']; ?>
  <?php print $search['submit']; ?>
  <?php print $search['hidden']; ?>
</div>
