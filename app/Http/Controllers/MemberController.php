<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index () {
        return view('participants.index', [
            'participants' => Member::all()
        ]);
    }

    public function show (Member $participant) {
        dd($participant->recipes());
    }
}
