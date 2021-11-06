<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Helpers\TelegramBot;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    const REVIEW_STR_COUNT = 350;
    const REVIEW_SCREEN_STR_COUNT = 200;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $reviews = array_map(function($review) {
            if (strlen($review['text']) > self::REVIEW_STR_COUNT) {
                $review['text'] = (mb_substr($review['text'],0, self::REVIEW_STR_COUNT)).'...';
            }

            if (strlen($review['text']) > self::REVIEW_SCREEN_STR_COUNT) {
                $review['text_screen'] = (mb_substr($review['text'],0, self::REVIEW_SCREEN_STR_COUNT)).'...';
            }

            return $review;
        }, config('reviews'));

        $data = [
            'reviews' => $reviews
        ];

        return view('home.index', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lesson($id)
    {
        return view('lessons.'.$id);
    }

    /**
     * @param Request $request
     */
    public function signup(Request $request)
    {
        $chatId = env('TELEGRAM_ENGWAY_CHAT_TOKEN');

        $text = "Новая запись: \n\r";
        $text .= "ФИО: ".$request->get('name')." \n\r";
        $text .= "Телефон: ".$request->get('phone')." \n\r";

        TelegramBot::send($chatId, $text);

        return redirect('/');
    }
}
