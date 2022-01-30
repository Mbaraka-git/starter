<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndexModel;


class IndexController extends Controller
{
    public function dashboard()
    {
        dd('dashboard');
        return view('main.index', [
          //  'test' => IndexModel::get_news_by_section(141)
        ]);
    }

    public function index()
    {
        return view('welcome');
    }

}
