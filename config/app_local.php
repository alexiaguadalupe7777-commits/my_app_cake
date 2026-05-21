<?php

use function Cake\Core\env;

/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '7ebee3c62129c96062970ce01e08b9775a011944288c314f4550dab7e8d1bc99'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'host' => env('MYSQLHOST'),
            'port' => env('MYSQLPORT'),
            'username' => env('MYSQLUSER'),
            'password' => env('MYSQLPASSWORD'),
            'database' => env('MYSQLDATABASE'),
            'persistent' => false,
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'CacheMetadata' => true,
        ],

        /*
         * The test connection is used during the test suite.
         */
        'test' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'host' => env('MYSQLHOST'),
            'port' => env('MYSQLPORT'),
            'username' => env('MYSQLUSER'),
            'password' => env('MYSQLPASSWORD'),
            'database' => env('MYSQLDATABASE'),
            'persistent' => false,
            'encoding' => 'utf8mb4',
            'timezone' => 'UTC',
            'CacheMetadata' => true,
            'flags' => [],
            'log' => false,
        ],
    ],

    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
