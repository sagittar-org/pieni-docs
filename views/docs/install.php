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
<pre>
composer require sagittar-org/pieni:dev-master
cp vendor/sagittar-org/pieni/index.php .
cp vendor/sagittar-org/pieni/.htaccess .
</pre>
<p>フォーラムのデモを動かすには:</p>
<pre>
mysql < vendor/sagittar-org/pieni/misc/pieni.dump 
</pre>
