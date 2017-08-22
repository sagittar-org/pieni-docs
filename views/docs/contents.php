<h3><a href="<?php href('docs'); ?>">pieni ユーザガイド</a></h3>
  <form action="<?php href('docs/search'); ?>" method="post">
  <div class="input-group">
  <input type="text" name="search" class="form-control" placeholder="Search for..." value="<?php h(isset($_SESSION[uri('actor')]['docs']['search']) ? $_SESSION[uri('actor')]['docs']['search'] : ''); ?>" autofocus>
    <span class="input-group-btn">
      <button class="btn btn-default" type="button" onclick="this.form.submit();"><span class="glyphicon glyphicon-search"></span></button>
    </span>
  </div>
</form>
<h4><a href="<?php href('docs'); ?>">pieniについて</a></h4>
<h4><a href="<?php href('docs/page/package'); ?>">パッケージ</a></h4>
<h4><a href="<?php href('docs/page/request'); ?>">リクエスト</a></h4>
<h4><a href="<?php href('docs/page/model'); ?>">モデル</a></h4>
<h4><a href="<?php href('docs/page/helper'); ?>">ヘルパー</a></h4>
<h4><a href="<?php href('docs/page/view'); ?>">ビュー</a></h4>
<h4><a href="<?php href('docs/page/auth'); ?>">認証</a></h4>
