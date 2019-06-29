# Laravel exceptions handler 

### Go to the "app/Exceptions/Handler.php"
Update the code that is present with the one below :
```php
public function render($request, Exception $exception)
    {
		if($this->isHttpException($exception)){
            switch ($exception->getStatusCode()){
                case '404':
                    return redirect('/404');
                    break;
                case '405':
                    return redirect('/405');
                    break;
                case '403':
                    return redirect('/403');
                    break;
            }
        }
        return parent::render($request, $exception);
    }
```

### Set up the Route 

```php
Route::get('/404', function () {
    return "404! Page Not Found.";
});
Route::get('/403', function () {
    return "403 ! Permission Not Allowed.";
});
Route::get('/405', function () {
    return "405! Method Not Allowed.";
});
```

### That's it :)
