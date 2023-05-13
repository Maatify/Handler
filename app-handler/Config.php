<?php

/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2022-12-12
 * Time: 1:36 AM
 */

declare(strict_types = 1);

namespace Maatify\App;

/**
 * @property-read ?array $db
 * @property-read ?array dbLog
// * @property-read ?array $dbStore
// * @property-read ?array $dbCardSent
 * @property-read ?array $mailer
// * @property-read ?array $mailer_signup
// * @property-read ?array $mailer_account
 */
class Config
{
    protected array $config = [];

    public function __construct(array $env)
    {
        $this->config = [
            'db'     => [
                'host'     => $env['DB_HOST'],
                'user'     => $env['DB_USER'],
                'password' => $env['DB_PASS'],
                'dbname'   => $env['DB_DATABASE'],
//                'driver'   => $env['DB_DRIVER'] ?? 'mysql',
//                'driver'   => $env['DB_DRIVER'] ?? 'pdo_mysql',
            ],
            'dbLog'     => [
                'host'     => $env['DB_LOG_HOST'],
                'user'     => $env['DB_LOG_USER'],
                'password' => $env['DB_LOG_PASS'],
                'dbname'   => $env['DB_LOG_DATABASE'],
            ],

            'mailer' => [
                'dsn' => $env['SMTP_MAIL_ACCOUNT'] ?? '',
                'sender' => $env['SMTP_MAIL_ACCOUNT_SENDER'] ?? '',
            ],

        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }
}
