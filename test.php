<?php

include 'src/ServerChan.php';

$ret = scSend('', 'title from php sdk', 'desp', ['noip' => 1,'tags' => '服务器报警|图片']);
print_r($ret);
