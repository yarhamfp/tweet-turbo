## install turbo laravel

[referensi](https://github.com/tonysm/turbo-laravel)

composer require tonysm/turbo-laravel
php artisan turbo:install

npm install
npm run dev

php artisan turbo:install --stimulus

tambahkan line ini di `app/Http/Kernel.php`, bagian $middlewareGroups

```php
\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
```

## Route Turbo Stream

```php
Route::post('posts/{post}/comments', function (Post $post) {
    $comment = $post->comments()->create(/** params */);

    if (request()->wantsTurboStream()) {
        return response()->turboStream()->append($comment);
    }

    return back();
});
```
