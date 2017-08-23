<h2>Search Results</h2>
<?php foreach ($vars as $row): ?>
<h4><a href="<?php href("docs/page/{$row['file']}"); ?>"><?php h(strip_tags(file("vendor/sagittar-org/pieni-docs/views/docs/{$row['file']}.php")[0])) ?></a></h4>
<p class="text-muted"><?php echo preg_replace("/({$_SESSION[uri('actor')]['docs']['search']})/", '<strong style="color:#000000;">$1</strong>', $row['grep']); ?></p>
<?php endforeach; ?>
