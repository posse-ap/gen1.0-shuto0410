# event.posse-ap.com

■注意
新規、ユーザーはパスワードがpassword0になっているので、すぐにパスワードを変えるようにしてください


■POSSEアプリを修正したい人へ

いつも通りgit cloneをしたらevent.posse-ap.comディレクトリで以下のコマンドを実行してください。１行１行実行してね。

docker-compose build --no-cache

docker-compose up -d

docker exec -it eventposse-apcom_phpfpm_1 bash

composer install

php artisan migrate
php artisan db:seed

終わったらexitと打てば普通のターミナルに戻ります。

これらを全てした上でlocalhostにいく
chromeのリンク書くところにlocalhostって入れてもらえれば大丈夫です！

ログインしたい場合は
email：test@com
password:password1

以上。みんなでいいアプリケーションにしましょう！
