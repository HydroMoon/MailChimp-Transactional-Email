<?php

namespace ApplabQatar\MailChimpTransactionalEmail\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed sendMessage(array $options)
 *
 * @see \App\Facade\LaravelChimp
 */
class LaravelChimp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailchimpApi';
    }
}
