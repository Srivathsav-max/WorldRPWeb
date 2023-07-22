<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

use Flarum\Extend;

// return [
//     (new Blomstra\Redis\Extend\Redis([
//         'connections' => [
//             'cache' => [
//                 'host' => 'redis-11663.c264.ap-south-1-1.ec2.cloud.redislabs.com',
//                 'password' => '3R3TsEGkfkKxt6MCKxuIVCYFsZdTcRE3',
//                 'port' => 11663,
//                 'database' => 0,
//             ],
//             'session' => [
//                 'host' => 'redis-11663.c264.ap-south-1-1.ec2.cloud.redislabs.com',
//                 'password' => '3R3TsEGkfkKxt6MCKxuIVCYFsZdTcRE3',
//                 'port' => 11663,
//                 'database' => 0,
//             ],
//             'queue' => [
//                 'default' => 'sync',
//                 'connections' => [
//                     'sync' => [
//                         'driver' => 'sync',
//                     ],
//                 ],
//             ],
//         ],
//     ]))
// ];

return [
    (new Blomstra\Redis\Extend\Redis([
        'host' => 'redis-11663.c264.ap-south-1-1.ec2.cloud.redislabs.com',
        'password' => '3R3TsEGkfkKxt6MCKxuIVCYFsZdTcRE3',
        'port' => 11663,
        'database' => 0,
    ]))
];




