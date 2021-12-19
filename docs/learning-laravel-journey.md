## Learning laravel journey

settting database di .env

### Generate controller dengan actions

```
php artisan make:controller NameController -r
```

### Generate model dengan migration

```shell
php artisan make:model Tweet -m # (-m create migration databse)
```

### mengecek rute Laravel

```shell
php artisan route:list
```

### membuat auto reload view

Install browser sync menggunakan npm

```shell
npm install browser-sync browser-sync-webpack-plugin@2.0.1 --save-dev --production=false
```

Tambahkan kode baris berikut ke `webpack.max.js`

```
mix.browserSync('127.0.0.1:8000');
```

## Contoh Kasus

membuat aplikasi bootleg twitter menggunakan Laravel dan Turbo
cukup membuat form memposting tweet, dan menampilkan tweet yang telah dibuat

### Langkah-langkah

#### Form Tweet

1. Generate controller `TweetsController`
2. Bikin rute untuk `index` dan `store` yang mengarah ke `TweetsController`
3. Generate model `Tweet` dengan atribut `content`, dan `timestamps` (created_at, updated_at)
4. Run migration `php artisan migrate`
5. Membuat action `TweetsController.index` merender view `pages.tweets.index`
5. Membuat view `tweets.index`, yang isinya form HTML untuk submit tweet. buat file baru di `resources/views/pages/tweets/index.php`

pada saat form tweet disubmit, maka action create mengirim respon view tampilan tweet yang telah dibuat

#### Login User

NEXT AFTER FORM TWEET CREATED
