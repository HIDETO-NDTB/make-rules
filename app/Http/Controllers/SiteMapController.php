<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use App\Rule;

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
        

        return $sitemap->render('xml');
    }

    
    
}
