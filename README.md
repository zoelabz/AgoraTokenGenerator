# Agora Token Generator
php-SDK

* composer
* php >=7.1
* ext-json >=1.0

# Install With Composer
-> composer require zoelabz/AgoraTokenGenerator

## Autoloading it in Your Project
```php
require_once 'vendor/autoload.php';

$config = [
    'debug'  => true,
    'id'     => 'your id',
    'secret' => 'your secret',
];

$agora = new \Zoelabz\Agora\Agora($config);

var_dump($agora->project->all()); // 
var_dump($agora->usage->get('2021-1-21','2021-1-22',['appid'])); //
var_dump($agora->kicking_rule->all()); //
var_dump($agora->token->buildToken('channel','uid')); // token
```

[zoelabz/AgoraTokenGenerator](https://github.com/zoelabz/AgoraTokenGenerator)  
zoelabz@gmail.com