<?php
namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Helpers\TelegramBot;

/**
 * Class LastDaysYear
 * @package App\Console\Commands
 */
class LastDaysYear extends Command
{
    const CHECK_DAYS = 100;
    /**
     * @var string
     */
    protected $signature = 'new_year:timer';

    /**
     * @var string
     */
    protected $description = 'Check booking reservio';

    /**
     * @throws \Exception
     */
    public function handle()
    {
        $message = "Анекдот: \n";
        $message .= config('bot')[array_rand(config('bot'))];

        TelegramBot::send(env('TELEGRAM_NEW_YEAR_CHAT_TOKEN'), $message);
    }
}
