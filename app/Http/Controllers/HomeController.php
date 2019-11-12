<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.settings');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
        $news = News::all();
        return view('admin.news', [
            'news' => $news
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form()
    {
        return view('admin.form');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $id = \request('id');
        $post = News::find($id);
        return view('admin.form', [
            'post' => $post
        ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     * @throws \Exception
     */
    public function store()
    {
        $this->validate(\request(), array(
            'header' => 'required',
            'main' => 'required'
        ));

        $post = new News();

        $file = \request()->file('image');
        if (!empty($file)) {
            $name = md5(random_bytes(10) . date('Y-m-d-H-i-s')) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/uploads/', $name);
            $post->image = '/uploads/' . $name;
        }

        $post->header = \request('header');
        $post->main = \request('main');
        $post->save();
        return redirect('admin/news');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update()
    {
        $this->validate(\request(), array(
            'header' => 'required',
            'main' => 'required'
        ));

        $id = \request('id');
        $post = News::find($id);

        $file = \request()->file('image');
        if (!empty($file)) {
            $name = md5(random_bytes(10) . date('Y-m-d-H-i-s')) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/uploads/', $name);
            $post->image = '/uploads/' . $name;
        }

        $post->header = \request('header');
        $post->main = \request('main');
        $post->save();
        return redirect('admin/news');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete()
    {
        $id = \request('id');
        $post = News::find($id);
        $post->delete();
        return redirect('admin/news');
    }


}
