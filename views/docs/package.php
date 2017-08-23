<h3>パッケージ</h3>
<h4>Webサイトパッケージの追加</h4>
パッケージの理解のためにpieniのWebサイトのパッケージを組み込んでみましょう。
<pre>
composer require sagittar-org/pieni-website:dev-master
cp vendor/sagittar-org/pieni-website/index.php .
</pre>
<p>
<code>./index.php</code>の<code>package_list</code>へWebサイトパッケージが追加されたため、Webサイトパッケージはフォールバックパスへ含まれ、pieniのWebサイトが表示されます。<br>
<code>./config.php</code>の<code>language_list</code>に複数の言語が指定され、言語選択が可能になります。<br>
まだユーザガイドは表示されません。<br>
</p>

<h4>ユーザガイドパッケージの追加</h4>
ユーザガイドパッケージを組み込んでみましょう。<br>
<pre>
composer require sagittar-org/pieni-docs:dev-master
cp vendor/sagittar-org/pieni-docs/index.php .
</pre>
<p>
<code>./index.php</code>の<code>package_list</code>へユーザガイドパッケージが追加されたため、ユーザガイドが表示されます。<br>
まだフォーラムは表示されません。<br>
</p>

<h4>フォーラムパッケージの追加</h4>
フォーラムパッケージを組み込んでみましょう。<br>
<pre>
composer require sagittar-org/pieni-forum:dev-master
cp vendor/sagittar-org/pieni-forum/index.php .
mysql < vendor/sagittar-org/pieni-forum/misc/pieni-forum.dump
</pre>
<p>
<code>./index.php</code>の<code>package_list</code>へフォーラムパッケージが追加されたため、フォーラムが表示されます。<br>
<code>./config.php</code>にアクターや認証の記述があるため、ログインなどが可能になります。
</p>
