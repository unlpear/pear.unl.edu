<?php /* Smarty version 2.6.0, created on 2009-08-12 11:12:14
         compiled from header.tpl */ ?>
<?php echo '<?php'; ?>

require_once 'UNL/Templates.php';
$p = UNL_Templates::factory('Fixed');
if (isset($_SERVER['UNL_TEMPLATEDEPENDENTSPATH'])):
    UNL_Templates::$options['templatedependentspath'] = '/srv/www/htdocs/';
endif;
$p->doctitle = "<title>UNL | pear.unl.edu | <?php echo $this->_tpl_vars['package']; ?>
 | <?php echo $this->_tpl_vars['title']; ?>
</title>";
$p->breadcrumbs = '<ul>
                    <li><a href="http://www.unl.edu/">UNL</a></li>
                    <li><a href="http://pear.unl.edu/">pear.unl.edu</a></li>
                    <li><a href="http://pear.unl.edu/index.php?package=<?php echo $this->_tpl_vars['package']; ?>
"><?php echo $this->_tpl_vars['package']; ?>
</a></li>
                    <li>API Documentation</li>
                    </ul>';
$p->head .= '<link type="text/css" rel="stylesheet" href="/docs/<?php echo $this->_tpl_vars['package']; ?>
/media/stylesheet.css" />';
$p->titlegraphic = '<h1><?php echo $this->_tpl_vars['package']; ?>
 API Documentation</h1><h2>Developers, developers, developers, devel&hellip;</h2>';
$p->navlinks = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/docs/<?php echo $this->_tpl_vars['package']; ?>
/li_<?php echo $this->_tpl_vars['package']; ?>
.php');
$p->leftRandomPromo = '';
ob_start();
<?php echo '?>'; ?>

			<?php if ($this->_tpl_vars['top3']): ?><div class="page-body"><?php endif; ?>
			