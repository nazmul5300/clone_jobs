<?php

namespace App\Console\Commands;

use App\Mail\UserAlert;
use Illuminate\Console\Command;
use Mail;

class SendSems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Sms for You';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        Mail::to('test@gmail.com')->send(new UserAlert());
        return Command::SUCCESS;
    }
}
