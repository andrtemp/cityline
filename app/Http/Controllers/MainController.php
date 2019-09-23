<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function __construct()
    {
    }

    public function main()
    {
        $news = DB::table('news')->orderByDesc('id')->limit(5)->get();
        return view('pages.main',[
            'news' => $news
        ]);
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
}
