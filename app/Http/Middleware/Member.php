<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Member
{

    public function handle(Request $request, Closure $next)
    {   
        
        // $true = DB::table('subscriptions')->where('user_id', Auth()->user()->id)->exists() ? 1 : 0;
        // dd($true);

        if (DB::table('subscriptions')->where('user_id', Auth()->user()->id)->exists() == false) {
            return redirect('/recipes')->with('alert', 'Access denied! You have to subscribe first');
        }

        return $next($request);
    }
}
