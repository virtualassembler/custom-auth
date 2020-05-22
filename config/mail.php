<?php
return [
    "driver" => "smtp",
    "host" => "smtp.mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "172724ad016441",
    "password" => "e3bfedc234992f",
    "sendmail" => "/usr/sbin/sendmail -bs",
    'stream' => [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ]
];
