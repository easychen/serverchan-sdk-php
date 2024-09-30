# serverchan-sdk-php

Server酱官方PHP SDK，兼容SCT和SC3。

## Install composer package
```bash
composer require easychen/serverchan-sdk
```

## Use it

```php
$ret = scSend('sendkey', 'title', 'desp', ['noip' => 1,'tags'=>'服务器报警|图片']);
print_r($ret);
```