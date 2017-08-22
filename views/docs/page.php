<?php
$file_list = ['index', 'request', 'package', 'model', 'helper', 'view', 'auth'];
$prev = FALSE;
for ($file = current($file_list); $file !== FALSE; $file = next($file_list))
{
	if ( ! isset(uri('param_arr')[0]) OR $file === uri('param_arr')[0])
	{
		break;
	}
	$prev = $file;
}
$next = next($file_list);
?>
<?php if ($next !== FALSE): ?>
<div class="pull-right">
<span class="glyphicon glyphicon-chevron-right"></span> <?php l('crud_next'); ?> 
<a href="<?php href("docs/page/{$next}"); ?>"><?php h(strip_tags(file("vendor/sagittar-org/pieni-docs/views/docs/{$next}.php")[0])) ?></a>
</div>
<?php endif; ?>
<?php if ($prev !== FALSE): ?>
<div>
<a href="<?php href("docs/page/{$prev}"); ?>"><?php h(strip_tags(file("vendor/sagittar-org/pieni-docs/views/docs/{$prev}.php")[0])) ?></a>
<?php l('crud_prev'); ?> <span class="glyphicon glyphicon-chevron-left"></span>
</div>
<?php endif; ?>
