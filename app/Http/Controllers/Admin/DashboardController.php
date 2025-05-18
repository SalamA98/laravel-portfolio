<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;

use App\Models\Project;
use App\Models\Message;
use App\Models\Admin;

class DashboardController extends Controller
{
    public function index()
    {
        $projectCount = Project::count();
        $messageCount = Message::count();
        $certificateCount = Certificate::count();

        return view('admin.dashboard', compact('projectCount', 'messageCount','certificateCount'));
    }
    public function editPassword()
    {
        return view('admin.user.edit');
    }    

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $admin = auth()->guard('admin')->user();

        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $admin->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully.');

    }
}
