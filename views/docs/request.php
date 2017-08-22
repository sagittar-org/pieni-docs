<h3>リクエスト</h3>
<p>
<code>./.htaccess</code>の指示により<code>./direct</code>から始まらないリクエストは全て<code>./index.php</code>によって処理されます。<br>
</p>

<h3>パッケージ</h3>
<p>
ロードの検索バスに含ませるパッケージは<code>./index.php</code>の<code>package_list</code>で指示します。<br>
</p>

<h3>URIセグメント</h3>
<p>
セグメント情報は<code>uri()</code>で参照します。<br>
第1から第4セグメントは、言語、アクター、クラス、メソッドに対応します。<br>
言語、アクター、クラスが取り得る値は<code>./config.php</code>から配列で指示されます。<br>
0番目の要素がデフォルト値で、これらは省略されなければいけません。<br>
クラスが<code>./config.php</code>で指示される<code>table_list</code>に含まれる場合、第5から第7セグメントは、ID、エイリアス、親IDに対応します。<br>
上記以降のセグメントはクラスメソッドの引数に渡されます。<br>
URI<code>docs/index/a/b/c</code>での例を示します。<br>
</p>
<pre>
Array
(
    [uri_string] => docs/index/a/b/c
    [param_arr] => Array
        (
            [0] => a
            [1] => b
            [2] => c
        )

    [language] => ja
    [actor] => g
    [class] => docs
    [method] => index
)
</pre>

<h3>コントローラのロード</h3>
<p>
検索バスから<code>uri('class')</code>に対応するコントローラをロードします。<br>
<code>uri('class')</code>が<code>table_list</code>に含まれる場合、コントローラ<code>Crud</code>も検索パスに含まれます。<br>
これは独自のビジネスロジックがない場合、コントローラが不要であることを意味します。<br>
</p>

<h3>モデルのロード</h3>
<p>
コントローラが<code>Crud</code>を継承する場合、<code>uri('class')</code>に対応するモデルがロードされます。<br>
</p>

<h3>クラスメソッドの実行</h3>
<p>
コントローラの<code>uri('method')</code>に対応するメソッドを実行します。<br>
</p>

<h3>ビューのロード</h3>
<p>
Ajaxではないリクエストでは、多くの場合クラスメソッドからビューをロードします。<br>
ビューからも他のビューをネストしてロードできます。<br>
ビューをカスタマイズする場合は、あなたのパッケージバスにビューファイルを設置します。<br>
pieniが提供するビューは最終フォールバック先であり編集も削除も必要ありません。<br>
</p>
