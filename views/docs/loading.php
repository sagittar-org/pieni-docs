<h3>ローディング</h3>
<?php
function fallback2($filename, $dir, $paths = [])
{
	foreach (['', '/vendor/sagittar-org/pieni'] as $package)
	{
		foreach (cartesian($paths) as $array)
		{
			$path = implode('/', array_filter($array, 'strlen'));
//			echo preg_replace('#^'.getcwd().'#', '', "{$package}/{$dir}/{$path}/{$filename}").'<br>';
		}
	}
}

$paths = [
	[uri('language'), ''],
	[uri('actor'), ''],
	in_array($class, config('uri')['table_list']) ? [$class, 'crud', ''] : [$class, ''],
];
fallback2("Post_model.php", 'models');
?>
<p>
例では以下の条件を仮定します。
</p>
<table class="table">
<tr>
<th>config('package_list')</th>
<td><pre>[
	getcwd(),
	getcwd().'/vendor/sagittar-org/pieni',
]</pre></td>
</tr>
<tr>
<th>uri('language')</th>
<td>ja</td>
</tr>
<tr>
<th>uri('actor')</th>
<td>g</td>
</tr>
<tr>
<th>uri('class')</th>
<td>welcome</td>
</tr>
</table>
<p>
<code>package_list</code>は常にフォールバックパスの最上位に位置します。<br>
ローディング関数によっては独自のフォールバックパスが存在します。<br>
</p>

<h4>ビューのロード</h4>
<p>
データを伴うビューのロード例を示します。<br>
</p>
フォールバックパス<br>
<code>./helpers/common.php</code>
<pre>
[
	[uri('language'), ''],
	[uri('actor'), ''],
	in_array($class, config('uri')['table_list']) ? [$class, 'crud', ''] : [$class, ''],
]
</pre>
ロードの指示
<pre>
load_view('index', ['message' => 'Hello, world!']);
</pre>
展開後のフォールバックパス
<pre>
/views/ja/g/welcome/index.php
/views/ja/g/index.php
/views/ja/welcome/index.php
/views/ja/index.php
/views/g/welcome/index.php
/views/g/index.php
/views/welcome/index.php
/views//index.php
/vendor/sagittar-org/pieni/views/ja/g/welcome/index.php
/vendor/sagittar-org/pieni/views/ja/g/index.php
/vendor/sagittar-org/pieni/views/ja/welcome/index.php
/vendor/sagittar-org/pieni/views/ja/index.php
/vendor/sagittar-org/pieni/views/g/welcome/index.php
/vendor/sagittar-org/pieni/views/g/index.php
/vendor/sagittar-org/pieni/views/welcome/index.php
/vendor/sagittar-org/pieni/views/index.php
</pre>
ビューでのデータの参照
<pre>
&lt;?php h($vars['messsage']); ?&gt;
</pre>
<p>
アプリケーションパッケージにビューが見つからなければpieniパッケージからビューがロードされます。<br>
適切なディレクトリにファイルを設置すれば、コードを一切変更することなく、全ての言語、アクター、クラスに共通のビューを適用したり、特定の言語、アクター、クラスにだけカスタマイズしたビューを適用できることを意味します。<br>
これらはビュー以外のローディングにも当てはまります。<br>
第2引数のデータは、ビュー側では<code>$vars</code>にカプセル化されます。<br>
</p>

<h4>テンプレートのロード</h4>
<p>
テンプレートは<code>&lt;html&gt;</code>タグなどを含む最上位のビューです。<br>
フォールバックパスはビューと同一です。<br>
ビューのローディングとの相違は常に<code>template.php</code>を検索することです。<br>
第1引数で支持するテンプレート直下にロードされるビューは、テンプレートでは変数<code>$view</code>に格納されます。<br>
</p>
ロードの指示
<pre>
load_template('index');
</pre>
テンプレートでのビューのローディング
<pre>
&lt;?php load_view($view, $vars, $class); ?&gt;
</pre>

<h4>モデルのロード</h4>
<p>
モデルには独自のフォールバックパスはありません。<br>
</p>
ロードの指示
<pre>
load_model('post');
</pre>
展開後のフォールバックパス
<pre>
/models//Post_model.php
/vendor/sagittar-org/pieni/models//Post_model.php
</pre>
