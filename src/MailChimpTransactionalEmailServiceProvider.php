<?php

namespace ApplabQatar\MailChimpTransactionalEmail;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ApplabQatar\MailChimpTransactionalEmail\Commands\MailChimpTransactionalEmailCommand;
use ApplabQatar\MailChimpTransactionalEmail\Services\MailChimpService;

class MailChimpTransactionalEmailServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-mailchimp')
            ->hasConfigFile('mailchimp-transactional-email');
    }

    public function bootingPackage()
    {
        $this->app->singleton('mailchimpApi', function () {
            $apiKey = config('mailchimp-transactional-email.mailchimp.api_key');
            return new MailChimpService($apiKey);
        });
    }
}
