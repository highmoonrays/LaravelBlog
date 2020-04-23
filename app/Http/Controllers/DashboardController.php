<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Support\Renderable;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        return view('dashboard')->with('posts', $user->posts);
    }
}
