# serverchan-sdk-php

## Install composer package
```bash
composer require easychen/serverchan-sdk
```

## Use it

```php
$ret = scSend('sendkey', 'title', 'desp', ['noip' => 1,'tags'=>'服务器报警|图片']);
print_r($ret);
```