<?php

namespace ApplabQatar\MailChimpTransactionalEmail\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use ApplabQatar\MailChimpTransactionalEmail\MailChimpTransactionalEmailServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'ApplabQatar\\MailChimpTransactionalEmail\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MailChimpTransactionalEmailServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_mailchimp-transactional-email_table.php.stub';
        $migration->up();
        */
    }
}
