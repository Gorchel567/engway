<?php
namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Helpers\TelegramBot;

/**
 * Class BookingReservioCommand
 * @package App\Console\Commands
 */
class BookingReservioCommand extends Command
{
    const CHECK_DAYS = 100;
    /**
     * @var string
     */
    protected $signature = 'booking:reservio {debug?}';

    /**
     * @var string
     */
    protected $description = 'Check booking reservio';

    /**
     * @throws \Exception
     */
    public function handle()
    {
        $now = Carbon::now('Africa/Nairobi');

        $debug = $this->argument('debug');

        if (!empty($debug)) {
            $msg = 'Проверка даннных '.$now->format('Y-m-d');
            TelegramBot::send(env('TELEGRAM_RESERVIO_CHAT_TOKEN'), $msg);
        }

        $finishDate = clone $now;
        $finishDate->addDays(static::CHECK_DAYS);

        $url = 'https://api.reservio.com/v2/businesses/09250556-2450-437f-aede-82e78712f114/availability/booking-days';
        $params = [
            'filter[from]' => $now->format('Y-m-d'),
            'filter[to]' => $finishDate->format('Y-m-d'),
            'filter[slotSize]' => 900,
            'filter[resourceId]' => 'eb4e43fe-9b6d-4dfd-99ad-451ca81bb630',
            'filter[serviceId]' => 'c2fbd5eb-6966-4ead-b7c1-1a0eb65cf295',
            'sort' => '-createdAt',
            'page[limit]' => static::CHECK_DAYS
        ];

        $fullUrl = $url.'?'.http_build_query($params);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $fullUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: _nss=1'
            ),
        ));

        $jsonResponse = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($jsonResponse, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            TelegramBot::send(env('TELEGRAM_RESERVIO_CHAT_TOKEN'), 'Ошибка данных '.$jsonResponse);
            return false;
        }

        foreach ($response['data'] as $record)
        {
            if (!empty($record['attributes']['isAvailable'])) {
                $msg = 'Найдена свободная дата '.$record['attributes']['createdAt'].'. '.json_encode($record);
                TelegramBot::send(env('TELEGRAM_RESERVIO_CHAT_TOKEN'), $msg);
            }
        }
    }
}
