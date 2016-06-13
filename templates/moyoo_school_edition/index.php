<?php
defined('_JEXEC') or die('Restricted access'); // no direct access
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = null;
if (isset($this))
  $document = & $this;
$baseUrl = $this->baseurl;
$templateUrl = $this->baseurl . '/templates/' . $this->template;
artxComponentWrapper($document);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>
</head>
<body>
<div id="art-page-background-simple-gradient">
    <div id="art-page-background-gradient"></div>
</div>
<div id="art-main">
<div class="art-sheet">
    <div class="art-sheet-tl"></div>
    <div class="art-sheet-tr"></div>
    <div class="art-sheet-bl"></div>
    <div class="art-sheet-br"></div>
    <div class="art-sheet-tc"></div>
    <div class="art-sheet-bc"></div>
    <div class="art-sheet-cl"></div>
    <div class="art-sheet-cr"></div>
    <div class="art-sheet-cc"></div>
    <div class="art-sheet-body"><img src="/images/banners/Home-Banner.jpg"/>
<jdoc:include type="modules" name="banner1" style="artstyle" artstyle="art-nostyle" />
<?php echo artxPositions($document, array('top1', 'top2', 'top3'), 'art-block'); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<?php if (artxCountModules($document, 'left')) : ?>
<div class="art-layout-cell art-sidebar1"><?php echo artxModules($document, 'left', 'art-block'); ?>
</div>
<?php endif; ?>
<div class="art-layout-cell art-<?php echo artxCountModules($document, 'left') ? 'content' : 'content-wide'; ?>">

<?php
  echo artxModules($document, 'banner2', 'art-nostyle');
  if (artxCountModules($document, 'breadcrumb'))
    echo artxPost(null, artxModules($document, 'breadcrumb'));
  echo artxPositions($document, array('user1', 'user2'), 'art-article');
  echo artxModules($document, 'banner3', 'art-nostyle');
?>
<?php if (artxHasMessages()) : ?><div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner">
<div class="art-postcontent">
    <!-- article-content -->

<jdoc:include type="message" />

    <!-- /article-content -->
</div>
<div class="cleared"></div>

</div>

		<div class="cleared"></div>
    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />
<?php echo artxModules($document, 'banner4', 'art-nostyle'); ?>
<?php echo artxPositions($document, array('user4', 'user5'), 'art-article'); ?>
<?php echo artxModules($document, 'banner5', 'art-nostyle'); ?>
</div>

    </div>
</div>
<div class="cleared"></div>

<?php echo artxPositions($document, array('bottom1', 'bottom2', 'bottom3'), 'art-block'); ?>
<jdoc:include type="modules" name="banner6" style="artstyle" artstyle="art-nostyle" />
<div class="art-footer">
    <div class="art-footer-body">
         <?php echo artxModules($document, 'syndicate'); ?>
        <div class="art-footer-text">
          <?php if (artxCountModules($document, 'copyright') == 0): ?>
<p>Copyright &copy; 2011 ---. 
All Rights Reserved. <br/>
   <a href="http://www.freedomain.co.nr/" target="_blank" title="Free Domain"><img src="http://emarzaa.imdrv.net/nrlink.gif" width="88" height="31" border="0" alt="Free Domain" /></a>
  <a href="http://www.joomla.org">Joomla!</a> ist freie, unter der <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL-Lizenz</a> ver&ouml;ffentlichte Software.
<a href="http://www.directory.co.nr">CO.NR Directory</a>
<!-- Start 1FreeCounter.com code -->
  
  <script language="JavaScript">
  var data = '&r=' + escape(document.referrer)
	+ '&n=' + escape(navigator.userAgent)
	+ '&p=' + escape(navigator.userAgent)
	+ '&g=' + escape(document.location.href);

  if (navigator.userAgent.substring(0,1)>'3')
    data = data + '&sd=' + screen.colorDepth 
	+ '&sw=' + escape(screen.width+'x'+screen.height);

  document.write('<a href="http://www.1freecounter.com/stats.php?i=90043" target=\"_blank\" >');
  document.write('<img alt="Free Counter" border=0 hspace=0 '+'vspace=0 src="http://www.1freecounter.com/counter.php?i=90043' + data + '">');
  document.write('</a>');
  </script>

<!-- End 1FreeCounter.com code -->
</p>

          <?php else: ?>
          <?php echo artxModules($document, 'copyright', 'art-nostyle'); ?>
          <?php endif; ?>
        </div>
		<div class="cleared"></div>
    </div>
</div>
		<div class="cleared"></div>
    </div>
</div>

<div class="cleared"></div>
<p class="art-page-footer">&copy; Designed by moyoo - <a href="http://www.moyoo.de/website-templates" target="_blank">Website Templates</a> and sponsored by  <a href="http://www.web-rechner.eu" target="_blank">web-rechner.eu</a></p>

</div>

</body> 
</html>