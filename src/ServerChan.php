<?php

// class ScSendOptions
// {
//     public $tags;
//     public $short;
//     public $noip;
//     public $channel;
//     public $openid;
// }

// class ScSendResponse
// {
//     public $code;
//     public $message;
//     public $data;
// }

function scSend($sendkey, $title, $desp = '', $options = null)
{
    $is_sctp = strpos($sendkey, 'sctp') === 0;
    if ($is_sctp) {
        preg_match('/^sctp(\d+)t/', $sendkey, $matches);
        $url = "https://{$matches[1]}.push.ft07.com/send/{$sendkey}.send";
    } else {
        $url = "https://sctapi.ftqq.com/{$sendkey}.send";
    }


    $params = array_merge([
        'title' => $title,
        'desp' => $desp
    ], (array)$options);

    $payload = json_encode($params);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json;charset=utf-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    return $result;
}
