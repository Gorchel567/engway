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
        $newYear = Carbon::create(2023,1,2);
        $now = Carbon::now('Africa/Nairobi');

        $diff = $newYear->diffInDays($now, true);

        TelegramBot::send(env('TELEGRAM_NEW_YEAR_CHAT_TOKEN'), 'До Нового Годв осталось '.$diff.' дней! С наступающим!');
    }
}
