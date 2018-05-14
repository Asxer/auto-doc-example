<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 26.08.16
 * Time: 11:49
 */

return [
    'route' => '/documentation',
    'info' => [
        'description' => 'swagger-description', // Name of view
        'version' => '0.0.0',
        'title' => 'Auto doc demonstration',
        'termsOfService' => '',
        'contact' => [
            'email' => 'rdubrovin@ronasit.com'
        ],
        'license' => [
            'name' => '',
            'url' => ''
        ]
    ],
    'swagger' => [
        'version' => '2.0'
    ],
    'basePath' => '/api',
    'schemes' => [],
    'definitions' => [],
    'security' => '', //possible values : jwt, laravel or null if your project dont need auth
    'defaults' => [
        'code-descriptions' => [
            '200' => 'Operation successfully done',
            '204' => 'Operation successfully done',
            '404' => 'This entity not found'
        ]
    ],
    'data_collector' => ''
];
