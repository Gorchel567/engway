<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        //reviews
        $reviews = array_map(function($review) {
            if (strlen($review['text']) > self::REVIEW_STR_COUNT) {
                $review['text'] = (mb_substr($review['text'],0, self::REVIEW_STR_COUNT)).'...';
            }

            if (strlen($review['text']) > self::REVIEW_SCREEN_STR_COUNT) {
                $review['text_screen'] = (mb_substr($review['text'],0, self::REVIEW_SCREEN_STR_COUNT)).'...';
            }

            return $review;
        }, config('reviews'));

        //gallery
        $gallery = array_map(function($photoName) {
            return '/images/gallery/'.$photoName;
        }, config('gallery'));

        $data = [
            'reviews' => $reviews,
            'gallery' => $gallery,
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
        Log::info($request->all());

        return redirect('/');
    }
}
