#laravel-database-extensions

##Class extensions to the database component of Laravel 4

- Support for ODBC
- Support for Firebird
- Model validation based on the Aware bundle from Laravel 3

##config/app.php

```php
'providers' => array(
//  'Illuminate\Database\DatabaseServiceProvider',
  'Illuminati\Database\DatabaseServiceProvider',
),

'aliases' => array(
  'EloquentValidated' => 'Illuminati\Database\Eloquent\Model',
),
```

##composer.json

```json
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/greglamb/laravel-database-extensions"
  }
],
"require": {
  "greglamb/laravel-database-extensions": "*"
},
```
