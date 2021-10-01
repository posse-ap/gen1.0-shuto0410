
## migrationデータ型一覧
- bigIncrements(‘id’)
- increments(‘id’)
- string(‘カラム名’)
- text(‘カラム名’)
- integer(‘カラム名’)
- tinyInteger(‘カラム名’)
- bigInteger(‘カラム名’)
- date(‘カラム名’)
- timestamps()
- softDeletes()- 
- nullable()
- unique()
- default()
- unsigned()
- comment(‘コメント内容’)
- index(‘カラム名’)

## アプデorインサート
```
$flight = App\Flight::updateOrCreate(
    ['departure' => 'Oakland', 'destination' => 'San Diego'],
    ['price' => 99]
);
```
`第一引数があれば、アプデ。なかったらインサート`

## キャッシュクリア

```
php artisan config:cache
php artisan config:clear
composer dump-autoload -o
```

# 参考url

## ログイン関連
 https://knowledge.cpi.ad.jp/howto-cpi/laravel-login/

## カラム変更する時の注意点
https://qiita.com/snbk/items/803aea10773052629a45

``pdomysqlがpdo/mysqlになっているせい変更ができない！！``

## モデルの作成から表示まで(何でも乗ってる)
https://qiita.com/yukibe/items/f18c946105c89c37389d

## ミドルウェア
https://blog.capilano-fw.com/?p=3987#i-3

## テーブル結合
https://qiita.com/zaburo/items/d665804f8ea850502c64

## クエリびるだ一覧
https://qiita.com/KZ-taran/items/64bd5d515e45224f6b95

## ミドルウェア
https://laraweb.net/practice/1396/

ミドルウェアを作っただけでは使えません。

/app/Http/Kernel.php でミドルウェアを登録する必要があります。

ミドルウェアを登録するポイントは3つあります。

・全ての処理に共通して処理を行う場合・・・$middleware に登録します。

・複数のミドルウェアをまとめて(グループ)登録する場合・・・$middlewareGroups に登録します。

・単体で使うミドルウェアを登録しておく場合・・・$routeMiddleware にキーと共に登録します。

## ORM留意点
https://qiita.com/henriquebremenkanp/items/cd13944b0281297217a9

# コマンド一覧
## マイグレートしてシードを初期化
    php artisan migrate:fresh --seed 

## ブラウザシンク
```
npm run watch
```
### sass使うにあたって
- webpack.mix.jsで処理を書いた
- npm installして npm run watchとかで動かす
- web.phpに加筆
```
Route::get('scss', function () {
    return view('for-scss');
});
```

## table作成方法
    php artisan make:migration create_"table名"_table

## seedの作成
    php artisan make:seeder "table名"TableSeeder
    
### seedに記述
    DB::table('title')->insert([
        [
            'title' => '東京の難読漢字',
        ],
        [
            'title' => '広島の難読漢字',
        ]
    ]);
### その後DatabaseTableSeederに加筆
    $this->call([
    TitlesTableSeeder::clasQuestionsTableSeeder::lasCho icesTableSeeder:class,
    ]);

## インサートしてそのidを取得
    ```
    $id = DB::table('users')->insertGetId(
    ['email' => 'john@example.com', 'votes' => 0]
    );
    ```

## モデル作成
    php artisan make:model Flight -m
``テーブルの単数形をつける``
