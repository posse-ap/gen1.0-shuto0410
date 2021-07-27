
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

カラム変更する時の注意点
    https://qiita.com/snbk/items/803aea10773052629a45
    <!-- TODO: -->
    pdomysqlがpdo/mysqlになっているせい変更ができない！！

モデルの作成から表示まで
    https://qiita.com/yukibe/items/f18c946105c89c37389d

     php artisan make:model "テーブルの単数形(先頭大文字推奨)"

    便利コマンド
        php artisan migrate:fresh --seed (消してseedで初期化)