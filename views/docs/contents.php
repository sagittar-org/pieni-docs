<h2><a href="<?php href('docs'); ?>">pieni ユーザガイド</a></h2>
  <form action="<?php href('docs/search'); ?>" method="post">
  <div class="input-group">
  <input type="text" name="search" class="form-control" placeholder="Search for..." value="<?php h(isset($_SESSION[uri('actor')]['docs']['search']) ? $_SESSION[uri('actor')]['docs']['search'] : ''); ?>">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button" onclick="this.form.submit();"><span class="glyphicon glyphicon-search"></span></button>
    </span>
  </div>
</form>
<hr>
<?php foreach (['index', 'request', 'loading', 'package', 'model', 'helper', 'view', 'auth'] as $file): ?>
<p><a href="<?php href("docs/page/{$file}"); ?>"><?php h(strip_tags(file("vendor/sagittar-org/pieni-docs/views/docs/{$file}.php")[0])) ?></a></p>
<?php endforeach; ?>
