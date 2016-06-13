<?php
defined('_JEXEC') or die('Restricted access');

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the sliders style, you would use the following include:
 * <jdoc:include type="module" name="test" style="slider" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 */

/*
 * Module chrome that allows for rounded corners by wrapping in nested div tags - similar to rounded style but easier to understand and manipulate
 */
function modChrome_jacket($module, &$params, &$attribs)
{ ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
			<div class="module_jacket">
				<div class="module_hat"></div>
					<div class="module_content">
						<?php if ($module->showtitle != 0) : ?>
							<h3><?php echo $module->title; ?></h3>
						<?php endif; ?>
					<?php echo $module->content; ?>
					</div>
				<div class="module_tail"></div>
			</div>
		</div>
	<?php
}
?>