<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ApplicationResource;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with('specialization', 'degree')->paginate();

        return ApplicationResource::collection($applications);
    }

    public function store(Request $request)
    {
        //
    }
}
