
migration
データ型一覧
・bigIncrements(‘id’)
・increments(‘id’)
・string(‘カラム名’)
・text(‘カラム名’)
・integer(‘カラム名’)
・tinyInteger(‘カラム名’)
・bigInteger(‘カラム名’)
・date(‘カラム名’)
・timestamps()
・softDeletes()

・nullable()
・unique()
・default()
・unsigned()
・comment(‘コメント内容’)
・index(‘カラム名’)



table作成方法
    php artisan make:migration create_"table名"_table
        <!-- database/migration に create_"table名"_table.phpができる -->
    後ろにつけるとtable設定までやってくれる
    <!--  --table="table名" -->

seedの作成
    php artisan make:seeder "table名"TableSeeder
    <!-- 
        DB::table('title')->insert([
            [
                'title' => '東京の難読漢字',
            ],
            [
                'title' => '広島の難読漢字',
            ]
        ]);
     -->
    その後DatabaseTableSeederに加筆
    <!--
            $this->call([
            TitlesTableSeeder::class,QuestionsTableSeeder::class,ChoicesTableSeeder::class,
        ]); 
     -->

参考url

カラム変更する時の注意点
    https://qiita.com/snbk/items/803aea10773052629a45
    <!-- TODO: -->
    pdomysqlがpdo/mysqlになっているせい変更ができない！！

モデルの作成から表示まで(何でも乗ってる)
    https://qiita.com/yukibe/items/f18c946105c89c37389d

モデル作る時
    単数形の名前にすると自動で接続してくれる
     php artisan make:model "テーブルの単数形(先頭大文字推奨)"


便利コマンド
    php artisan migrate:fresh --seed (消してseedで初期化)

ブラウザシンク
    npm run watch

テーブル結合
    https://qiita.com/zaburo/items/d665804f8ea850502c64

クエリびるだ一覧
https://qiita.com/KZ-taran/items/64bd5d515e45224f6b95

sass使うにあたって
web.phpに加筆
<!-- 
Route::get('scss', function () {
    return view('for-scss');
});
 -->

webpack.mix.jsで処理を書いた

npm installして npm run watchとかで動かす

インサートしてそのidを取得
    insertGetId()

ミドルウェア
<!-- https://blog.capilano-fw.com/?p=3987#i-3 -->

<!-- TODO: -->
<!-- https://laraweb.net/practice/1396/ -->
ミドルウェアを作っただけでは使えません。

/app/Http/Kernel.php でミドルウェアを登録する必要があります。

ミドルウェアを登録するポイントは3つあります。

・全ての処理に共通して処理を行う場合・・・$middleware に登録します。

・複数のミドルウェアをまとめて(グループ)登録する場合・・・$middlewareGroups に登録します。

・単体で使うミドルウェアを登録しておく場合・・・$routeMiddleware にキーと共に登録します。

## ログイン関連
url https://knowledge.cpi.ad.jp/howto-cpi/laravel-login/