<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ApplicationResource;
use App\Models\Application;
use App\Http\Requests\Application\StoreRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with('specialization', 'degree')->paginate();

        return ApplicationResource::collection($applications);
    }

    public function store(StoreRequest $request)
    {
        $application = new Application();
        $application->first_name = $request->first_name;
        $application->last_name = $request->last_name;
        $application->middle_name = $request->middle_name;
        $application->email = $request->email;
        $application->specialization_id = $request->specialization;
        $application->degree_id = $request->degree;
        $application->description = $request->description;
        $application->reception_at = Carbon::parse($request->reception_at);

        $application->save();

        return ApplicationResource::make($application);
    }
}
