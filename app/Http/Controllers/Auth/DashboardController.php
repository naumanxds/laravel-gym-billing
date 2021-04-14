<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Load Dashboard after login
     */
    public function load()
    {
        return view('dashboard', [
            'members' => User::all()->load('roles')
        ]);
    }

    /**
     * Update the update_at date of the user 
     * 
     * @param User $user 
     */
    public function updateFee(User $user)
    {
        $user->update([
            'updated_at' => Carbon::now()
        ]);

        return redirect('dashboard');
    }
}
