<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Retrieve data from the database or any other source
        $totalUsers = User::count();
        $activeUsers = User::count(); // Count all users (no status condition)
        $recentActivities = $this->getRecentActivities(); // You can define this method to fetch recent activities
        $latestUsers = User::orderBy('created_at', 'desc')->take(5)->get(); // Fetch the latest 5 users

        return view('admin.dashboard', compact('totalUsers', 'activeUsers', 'recentActivities', 'latestUsers'));
    }

    public function makeAdmin($userId)
    {
        $user = User::find($userId);

        if ($user) {
            // Update the user's role to 'admin'
            $user->update(['role' => 'admin']);

            return redirect()->route('admin.dashboard')->with('success', 'User is now an admin.');
        }

        return redirect()->route('admin.dashboard')->with('error', 'User not found.');
    }

    // Example method to get recent activities (replace with your logic)
    private function getRecentActivities()
    {
        // Implement your logic to fetch recent activities from the database or any other source
        return ['Activity 1', 'Activity 2', 'Activity 3'];
    }
}
