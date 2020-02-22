<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use App\Rule;
use App\Category;
use App\Comment;

class SiteMapController extends Controller
{
    public function sitemap()
    {
        $sitemap = \App::make("sitemap");
        $now = Carbon::now();
        $sitemap->add(url('/'), $now, '1.0', 'alweys');
        

        $rules = Rule::orderBy('created_at','desc')->get();
        foreach ($rules as $rule)
        {
            $sitemap->add(URL::to('/rules/' . $rule->id), $rule->created_at, '0.8', 'yearly');
        }

        $categories = Category::orderBy('created_at','desc')->get();
        foreach ($categories as $category)
        {
            $sitemap->add(URL::to('/categories/' . $category->id), $category->created_at, '0.8', 'yearly');
        }

        $comments = Coment::orderBy('created_at','desc')->get();
        foreach ($comments as $comment)
        {
            $sitemap->add(URL::to('/comments/' . $comment->id), $comment->created_at, '0.8', 'yearly');
        }
        

        return $sitemap->render('xml');
    }

    
    
}
