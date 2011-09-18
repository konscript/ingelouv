<?php 

// $Id$
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lte IE 7]>
    <style type="text/css">
      body { 
        behavior: url(<?php print $base_path . path_to_theme() . '/csshover3.htc'; ?>);
      }
      body.liquid-width #page {
        width: expression(document.body.clientWidth < 962? "960px" : document.body.clientWidth > 1282? "1280px" : "auto");
      }
      #logo img,
      .feed-icon img {
        behavior: url(<?php print $base_path . path_to_theme() . '/iepngfix.htc'; ?>);
      }
    </style>
  <![endif]-->

</head>
<body class="<?php print fervens_body_class($is_front, $search_box, $sidebar_left, $sidebar_right); ?>">
    <div id="pageTop"></div>
  <div id="bg"><div id="bg-t">
    <div id="page">
      <div id="header">
        <div id="site-title">
          <?php if (!empty($logo)): ?>
            <div id="logo">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            </div>
          <?php endif; ?>

          <?php if (!empty($site_name) || !empty($site_slogan)): ?>
            <div id="site-name-and-slogan">
              <?php if (!empty($site_name)): ?>
                <h1 id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
                </h1>
              <?php endif; ?>

              <?php if (!empty($site_slogan)): ?>
                <div id="site-slogan">
                  <?php print $site_slogan; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>

        <?php if (!empty($header)): ?>
          <div id="header-region">
            <?php print $header; ?>
          </div>
        <?php endif; ?>

        <div class="clear-both"><!-- --></div>
      </div>

      <?php if (!empty($primary_links) || !empty($search_box)): ?>
        <div id="primary-and-search" class="clear-both">
          <?php if (!empty($primary_links)): ?>
            <div id="primary">
              <?php print menu_tree($menu_name = 'primary-links'); ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($search_box)): ?>
            <div id="search-box">
              <?php print $search_box; ?>
            </div>
          <?php endif; ?>

          <div class="clear-both"><!-- --></div>
        </div>
      <?php endif; ?>

      <div id="wrapper" class="clear-both">
        <?php if (!empty($wrapper_top)): ?>
          <div id="wrapper-top">
            <?php print $wrapper_top; ?>
          </div>
        <?php endif; ?>

        <div id="wrapper-content" class="clear-both">
          <?php if (theme_get_setting('layout_column_type') == 'fervens-a'): ?>
            <div id="sidebar-left-and-main">
              <?php if (!empty($sidebar_left)): ?>
                <div id="sidebar-left"><div id="sidebar-left-inner">
                  <?php print $sidebar_left; ?>
                </div></div>
              <?php endif; ?>

              <div id="main"><div id="main-inner"><div id="main-inner-tl"><div id="main-inner-tr"><div id="main-inner-br"><div id="main-inner-bl"><div id="main-inner-content">
                <?php 
/*
if (!empty($breadcrumb)): <div id="breadcrumb"><?php print $breadcrumb; ?></div> ?>

                <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; 
*/
?>

                <?php if (!empty($content_top)): ?>
                  <div id="content-top" class="clear-both">
                    <?php print $content_top; ?>
                  </div>
                <?php endif; ?>

                <div id="content" class="clear-both">
                  <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                  <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
                  <div class="clear-both"><!-- --></div>
                  <?php if (!empty($messages)): print $messages; endif; ?>
                  <?php if (!empty($help)): print $help; endif; ?>
                  <div id="content-content" class="clear-both">
                    <?php print $content; ?>
                  </div>
                  <?php print $feed_icons; ?>
                </div>

                <?php if (!empty($content_bottom)): ?>
                  <div id="content-bottom" class="clear-both">
                    <?php print $content_bottom; ?>
                  </div>
                <?php endif; ?>

                <div class="clear-both"><!-- --></div>
              </div></div></div></div></div></div></div>

              <div class="clear-both"><!-- --></div>
            </div>

            <?php if (!empty($sidebar_right)): ?>
              <div id="sidebar-right"><div id="sidebar-right-inner">
                <?php print $sidebar_right; ?>
              </div></div>
            <?php endif; ?>
          <?php elseif (theme_get_setting('layout_column_type') == 'fervens-b'): ?>
            <div id="sidebar-left-and-right">
              <?php if (!empty($sidebar_left)): ?>
                <div id="sidebar-left"><div id="sidebar-left-inner">
                  <?php print $sidebar_left; ?>
                </div></div>
              <?php endif; ?>

              <?php if (!empty($sidebar_right)): ?>
                <div id="sidebar-right"><div id="sidebar-right-inner">
                  <?php print $sidebar_right; ?>
                </div></div>
              <?php endif; ?>

              <div class="clear-both"><!-- --></div>
            </div>

            <div id="main"><div id="main-inner"><div id="main-inner-tl"><div id="main-inner-tr"><div id="main-inner-br"><div id="main-inner-bl"><div id="main-inner-content">
              <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
              <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>

              <?php if (!empty($content_top)): ?>
                <div id="content-top" class="clear-both">
                  <?php print $content_top; ?>
                </div>
              <?php endif; ?>

              <div id="content" class="clear-both">
                <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
                <div class="clear-both"><!-- --></div>
                <?php if (!empty($messages)): print $messages; endif; ?>
                <?php if (!empty($help)): print $help; endif; ?>
                <div id="content-content" class="clear-both">
                  <?php print $content; ?>
                </div>
                <?php print $feed_icons; ?>
              </div>

              <?php if (!empty($content_bottom)): ?>
                <div id="content-bottom" class="clear-both">
                  <?php print $content_bottom; ?>
                </div>
              <?php endif; ?>

              <div class="clear-both"><!-- --></div>
            </div></div></div></div></div></div></div>
          <?php elseif (theme_get_setting('layout_column_type') == 'fervens-c'): ?>
            <div id="main-and-sidebar-right">
              <div id="main"><div id="main-inner"><div id="main-inner-tl"><div id="main-inner-tr"><div id="main-inner-br"><div id="main-inner-bl"><div id="main-inner-content">
                <?php if (!empty($breadcrumb)): ?><div id="breadcrumb"><?php print $breadcrumb; ?></div><?php endif; ?>
                <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>

                <?php if (!empty($content_top)): ?>
                  <div id="content-top" class="clear-both">
                    <?php print $content_top; ?>
                  </div>
                <?php endif; ?>

                <div id="content" class="clear-both">
                  <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                  <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
                  <div class="clear-both"><!-- --></div>
                  <?php if (!empty($messages)): print $messages; endif; ?>
                  <?php if (!empty($help)): print $help; endif; ?>
                  <div id="content-content" class="clear-both">
                    <?php print $content; ?>
                  </div>
                  <?php print $feed_icons; ?>
                </div>

                <?php if (!empty($content_bottom)): ?>
                  <div id="content-bottom" class="clear-both">
                    <?php print $content_bottom; ?>
                  </div>
                <?php endif; ?>

                <div class="clear-both"><!-- --></div>
              </div></div></div></div></div></div></div>

              <?php if (!empty($sidebar_right)): ?>
                <div id="sidebar-right"><div id="sidebar-right-inner">
                  <?php print $sidebar_right; ?>
                </div></div>
              <?php endif; ?>

              <div class="clear-both"><!-- --></div>
            </div>

            <?php if (!empty($sidebar_left)): ?>
              <div id="sidebar-left"><div id="sidebar-left-inner">
                <?php print $sidebar_left; ?>
              </div></div>
            <?php endif; ?>
          <?php endif; ?>

          <div class="clear-both"><!-- --></div>
        </div>

        <?php if (!empty($wrapper_bottom)): ?>
          <div id="wrapper-bottom">
            <?php print $wrapper_bottom; ?>
          </div>
        <?php endif; ?>
      </div>

      <div id="footer" class="clear-both">
        <?php if (!empty($footer)): ?>
          <div id="footer-region">
            <?php print $footer; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($secondary_links)): ?>
          <div id="secondary">
            <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')); ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($footer_message)): ?>
          <div id="footer-message">
            <?php print $footer_message; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div></div>

  <?php print $closure; ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20945829-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
