# Put sent email in the sent folder (for Laravel)

Add Listener for `\Illuminate\Mail\Events\MessageSent` that place sent email to the "Sent" folder by IMAP.

Based on [webklex/laravel-imap](https://github.com/Webklex/laravel-imap) so it must be installed by run:

```shell
php artisan vendor:publish --provider="Webklex\IMAP\Providers\LaravelServiceProvider"
```

and [configured](https://www.php-imap.com/frameworks/laravel/configuration) thought `.env` and `config/imap.php`.

