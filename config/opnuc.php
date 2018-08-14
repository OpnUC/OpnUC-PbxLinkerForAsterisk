<?php

/**
 * OpnUC アプリケーション設定
 */

return [
    'host' => env('ASTERISK_HOST', '127.0.0.1'),
    'port' => env('ASTERISK_PORT', 5038),
    'username' => env('ASTERISK_USERNAME', 'opnuc'),
    'password' => env('ASTERISK_PASSWORD', 'opnuc'),
    // Click to Callで使用するコンテキスト
    'originate_context' => env('ASTERISK_ORIG_CONTEXT', 'opnuc'),
    // Click to Callで通知するCallerID
    'originate_callerid' => env('ASTERISK_ORIG_CALLERID', 'Click 2 Call'),
    // Click to Callで使用するチャンネルのPrefix
    'originate_channel_prefix' => env('ASTERISK_ORIG_CHAN_PREFIX', ''),
    // DeviceNameのPrefix(DeviceStateにて使用)
    //  [Prefix]内線番号 の形式
    'device_name_prefix' => env('ASTERISK_DEVICE_PREFIX', ''),
];
