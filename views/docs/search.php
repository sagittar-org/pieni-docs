<h3>Search Results</h3>
<?php foreach ($vars as $row): ?>
<h4><a href="<?php href("docs/page/{$row['file']}"); ?>"><?php h($row['file']); ?></a></h4>
<p class="text-muted"><?php echo preg_replace("/({$_SESSION[uri('actor')]['docs']['search']})/", '<strong style="color:#000000;">$1</strong>', $row['grep']); ?></p>
<?php endforeach; ?>
