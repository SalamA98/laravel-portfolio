<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Message;

class DashboardController extends Controller
{
        public function index()
    {
        $projectCount = Project::count();
        $messageCount = Message::count();
        $certificateCount = Certificate::count();

        return view('admin.dashboard', compact('projectCount', 'messageCount','certificateCount'));
    }
}
