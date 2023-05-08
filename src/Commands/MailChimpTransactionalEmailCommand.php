<?php

namespace ApplabQatar\MailChimpTransactionalEmail\Commands;

use Illuminate\Console\Command;

class MailChimpTransactionalEmailCommand extends Command
{
    public $signature = 'mailchimp-transactional-email';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
