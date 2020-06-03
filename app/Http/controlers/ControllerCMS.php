<?php

namespace App\Http\Controllers;

use App\Page;

class ControllerCMS extends Controller
{

    public function getContent($url)
    {
        $page = new Page();
        return $page->render($url);
    }

    public function getEnglishContent($url)
    {
        $page = new Page();
        return $page->renderEngContent($url);
    }

    public function category()
    {
        return view('Category',['content'=>null,'eng'=>false,'test'=>Page::with('children')->where('parent_id',0)->get()]);
    }
}
