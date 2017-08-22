<h2>インストール</h2>
<h3>システム要件</h3>
<table class="table">
<tr><th>Webサーバ</th><td>Apache ^2</td></tr>
<tr><th>Apacheモジュール</th><td>rewrite</td></tr>
<tr><th>DBサーバ</th><td>MySQL ^5</td></tr>
<tr><th>プログラミング言語</th><td>PHP ^5 | ^7</td></tr>
<tr><th>PHPモジュール</th><td>gd, mysqli</td></tr>
<tr><th>その他</th><td>Composer, 基本的なUnixコマンド</td></tr>
</table>

<h3>インストール</h3>
<h3>1. 最小構成のセットアップ</h3>
<pre>
composer require sagittar-org/pieni:dev-master
cp vendor/sagittar-org/pieni/.htaccess .
cp vendor/sagittar-org/pieni/index.php .
</pre>
<p>
簡潔なトップページが表示されました。<br>
通常はここからアプリケーション開発を始めます。<br>
自分が何をするべきなのかわかっているならこの先を読む必要はありません。<br>
</p>

<h3>2. パッケージの追加</h3>
パッケージの理解のためにpieniのWebサイトのパッケージを組み込んでみましょう。
<pre>
composer require sagittar-org/pieni-website:dev-master
cp vendor/sagittar-org/pieni-website/index.php .
</pre>
<p>
pieniのWebサイトが表示されました。<br>
なぜでしょう。<br>
</p>
