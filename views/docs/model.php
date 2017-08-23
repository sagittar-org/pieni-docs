<h2>モデル</h2>
<p>
モデルはpieniの心臓部です。<br>
プロパティへの指示で、コントローラでのリクエスト制限や、ビューでの操作ボタンの表示などが行えます。<br>
<code>_hash</code>で終わるプロパティは連想配列、<code>_list</code>で終わるプロパティは添字配列、それ以外はスカラーで値を指定します。<br>
<?php $property_list = ['primary_key', 'display', 'use_card', 'has_hash', 'action_hash', 'select_hash', 'hidden_list', 'set_list', 'fixed_hash', 'success_hash', 'join_hash', 'where_list', 'where_hash', 'order_by_hash', 'limit_list']; ?>
<ul>
<?php foreach ($property_list as $property): ?>
<li><a href="#<?php h($property); ?>"><?php h($property); ?></a> - <?php l($property); ?></li>
<?php endforeach; ?>
</ul>
</p>

<h3 id="primary_key"><?php l('primary_key'); ?></h3>
<p>
<code>view</code>、<code>edit</code>、<code>delete</code>などで使用する主キーのフィールド名を指定します。<br>
</p>

<h3 id="display"><?php l('display'); ?></h3>
<p>
<code>view</code>のヘッダなどで使用する行のタイトルを示すフィールド名を指定します。<br>
</p>

<h3 id="use_card"><?php l('use_card'); ?></h3>
<p>
<code>TRUE</code>を指定すると、<code>index</code>で表形式のかわりにカード形式で結果行を表示します。<br>
</p>

<h3 id="has_hash"><?php l('has_hash'); ?></h3>
<p>
<code>view</code>で表示する子エンティティ一覧がある場合に指定します。<br>
</p>

<h3 id="action_hash"><?php l('action_hash'); ?></h3>
<p>
許可するアクションを指定します。<br>
</p>

<h3 id="select_hash"><?php l('select_hash'); ?></h3>
<p>
取得するフィールドを指定します。<br>
</p>

<h3 id="hidden_list"><?php l('hidden_hash'); ?></h3>
<p>
標準のビューでは表示しないフィールドを指定します。<br>
</p>

<h3 id="set_list"><?php l('set_list'); ?></h3>
<p>
更新するフィールドを指定します。<br>
</p>

<h3 id="fixed_hash"><?php l('fixed_hash'); ?></h3>
<p>
認証済みのアクターIDや現在日時など、<code>add</code>での固定値を指定します。<br>
</p>

<h3 id="success_hash"><?php l('success_hash'); ?></h3>
<p>
更新成功時のリダイレクト先を変更したい場合に指定します。<br>
</p>

<h3 id="join_hash"><?php l('join_hash'); ?></h3>
<p>
左外部結合を指定します。<br>
</p>

<h3 id="where_list"><?php l('where_list'); ?></h3>
<p>
固定の検索条件を指定します。<br>
</p>

<h3 id="where_hash"><?php l('where_hash'); ?></h3>
<p>
リクエストによる検索条件を指定します。<br>
</p>

<h3 id="order_by_hash"><?php l('order_by_hash'); ?></h3>
<p>
ソート条件を指定します。<br>
</p>

<h3 id="limit_list"><?php l('limit_list'); ?></h3>
<p>
表示件数を指定します。<br>
</p>
