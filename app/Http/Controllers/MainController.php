<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
    }

    public function main()
    {
        return view('pages.main');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function news()
    {
        $news = News::all();
        return view('pages.news', [
            'news' => $news
        ]);
    }

    public function services()
    {
        return view('pages.services');
    }

    public function sales()
    {
        $sales = [
            '2 по цене 1' => (object)[
                'description' => 'При покупке 2х месяцев платите всего за один',
                'price' => '100$'
            ],
            'Бесплатный год' => (object)[
                'description' => 'Подключайтесь прямо сейчас и у вас год бесплатно',
                'price' => '200$'
            ],
            'Играй и учись' => (object)[
                'description' => 'Качай игры бесплатно',
                'price' => '500$'
            ]
        ];
        return view('pages.sales', [
            'sales' => $sales
        ]);
    }

    public function prices()
    {
        $prices = [
            'Standart' => (object)[
                'description' => 'Тариф включем 10 МБ в месяц',
                'price' => '100$'
            ],
            'Lux' => (object)[
                'description' => 'Тариф включем 50 МБ в месяц',
                'price' => '200$'
            ],
            'Max Power' => (object)[
                'description' => 'Тариф включем безлимит',
                'price' => '500$'
            ]
        ];
        return view('pages.pricing', [
            'prices' => $prices
        ]);
    }
}
