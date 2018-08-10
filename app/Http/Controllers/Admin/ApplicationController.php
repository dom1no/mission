<?php

namespace App\Http\Controllers\Admin;

use App\Models\Application;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with('specialization', 'degree')->paginate();

        return view('admin.application.index', compact('applications'));
    }

    public function show(Application $application)
    {
        return view('admin.application.show', compact('application'));
    }

    public function paid(Application $application)
    {
        $application->is_paid = true;
        $application->save();

        return back();
    }
}
