<h2>pieniについて</h2>
<div class="alert alert-success" role="alert">
Transration <a href="https://github.com/sagittar-org/pieni-docs">pull requests</a> are welcome.
<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
</div>
<p>
pieniはLAMP環境で動作するPHPフレームワークです。<br>
CodeIgniterの影響を大きく受けています。<br>
CRUDと認証機能が含まれます。<br>
強力なモデルによりコントローラやビューを作成することなくプロトタイピングを行うことができます。<br>
コントローラ、モデル、ライブラリ、ビュー、言語ファイルなど、ほとんどのファイルはフォールバックによって、然るべきパスからロードされます。<br>
これはあらゆるファイルをあなたのパッケージに含めることができ、また置換が可能ということを意味します。<br>
</p>

<h3>システム要件</h3>
<table class="table">
<tr><th>Webサーバ</th><td>Apache ^2</td></tr>
<tr><th>Apacheモジュール</th><td>rewrite</td></tr>
<tr><th>DBサーバ</th><td>MySQL ^5</td></tr>
<tr><th>プログラミング言語</th><td>PHP ^5 | ^7</td></tr>
<tr><th>PHPモジュール</th><td>mysqli, gd</td></tr>
<tr><th>その他</th><td>Composer, 基本的なUnixコマンド</td></tr>
</table>

<h3>インストール</h3>
<p>
最小構成のセットアップ例を示します。<br>
</p>
<pre>
composer require sagittar-org/pieni:^1.0
cp vendor/sagittar-org/pieni/.htaccess .
cp vendor/sagittar-org/pieni/index.php .
mysql < vendor/sagittar-org/pieni/misc/pieni.dump 
</pre>
<p>
簡潔なトップページが表示されました。<br>
通常はここからアプリケーション開発を始めます。<br>
初めてpieniを使うならば<a href="<?php href('docs/page/request'); ?>">リクエストの流れ</a>、<a href="<?php href('docs/page/loading'); ?>">ローディング</a>、<a href="<?php href('docs/page/package'); ?>">パッケージ</a>についても読んでください。<br>
</p>
