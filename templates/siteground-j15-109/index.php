<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
JPlugin::loadLanguage( 'tpl_SG1' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<!--[if lte IE 6]>
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie6.css" type="text/css" />
<![endif]-->

</head>
<body id="page_bg">
	<div id="wrapper">
		<div id="content">		
		<div id="top">
			<div id="pillmenu"><jdoc:include type="modules" name="user3" /></div>
			<div id="search"><jdoc:include type="modules" name="user4" /></div>
			<div class="clr"></div>
		</div>
		<div id="header">
		<div class="logo"><h1><a href="index.php"><?php echo $mainframe->getCfg('sitename') ;?></a></h1></div>
		<div class="newsflash<?php if(!$this->countModules('user1') and JRequest::getCmd('layout') != 'form') : ?> only<?php endif; ?>">
			<jdoc:include type="modules" style="rounded" name="top" />
		</div>
		</div>

		
		<?php if($this->countModules('left') and JRequest::getCmd('layout') != 'form') : ?>
		<div id="leftcolumn">
			<jdoc:include type="modules" name="left" style="rounded" />
			<br />
			<?php $sg = 'banner'; include "templates.php"; ?>
			<br />
		</div>
		<?php endif; ?>
		
		<?php if($this->countModules('left') and $this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
		<div id="maincolumn">
		<?php elseif($this->countModules('left') and !$this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
		<div id="maincolumn_left">
		<?php elseif(!$this->countModules('left') and $this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
		<div id="maincolumn_right">	
		<?php else: ?>
		<div id="maincolumn_full">	
		<?php endif; ?>
			<div class="nopad">				
				<jdoc:include type="message" />
				<?php if($this->params->get('showComponent')) : ?>
					<jdoc:include type="component" />
				<?php endif; ?>
			</div>
		</div>
		
		<?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
		<div id="rightcolumn">
			<jdoc:include type="modules" name="right" style="rounded" />
		</div>
		<?php endif; ?>
		<div class="clr"></div>
		</div>
		
		<div id="footer_bg">
			<div id="footer">
				<div id="footer_hold">
					<jdoc:include type="modules" name="debug" />
					<?php $sg = ''; include "templates.php"; ?>
					<a href="http://validator.w3.org/check/referer">valid xhtml</a>
					<a href="http://jigsaw.w3.org/css-validator/check/referer">valid css</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>