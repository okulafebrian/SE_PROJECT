<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{

    public function index()
    {  

        // 0: expired | 1: active | 2: cancelled

        $exist = false;
        $active = false;
        $id = auth()->user()->id;

        if (Subscription::where('user_id', $id)->exists()) {
            $exist = true;

            if (Subscription::where('status', 'Active')->exists()) {
                $active = true;
            }
        }

        $subscriptions = Subscription::where('user_id', auth()->user()->id)->get();
        $currentSubscription = $subscriptions->where('status','Active')->first();

        return view('subscriptions.index', [
            'subscriptions' => $subscriptions,
            'currentSubscription' => $currentSubscription,
            'exist' => $exist,
            'active' => $active,
            'start' => Carbon::now()->isoFormat('D MMMM YYYY'),
            'end' => Carbon::now()->addMonth()->isoFormat('D MMMM YYYY')
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Subscription::create([
            'user_id'=> $request->user()->id,
            'payment_date' => Carbon::now(),
            'end_date'=> Carbon::now()->addMonth(),
            'status' => 'Active'
        ]);

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Subscription $subscription)
    {
        $subscription->update([
            'status' => 'Cancel'
        ]);

        return back();
    }

    public function destroy($id)
    {
        //
    }
}
