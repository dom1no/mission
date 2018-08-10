<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DegreeResource;
use App\Http\Resources\SpecializationResource;
use App\Models\Degree;
use App\Models\Specialization;

class CatalogController extends Controller
{
    public function specializations()
    {
        $specializations = Specialization::get();

        return SpecializationResource::collection($specializations);
    }

    public function degrees()
    {
        $degrees = Degree::get();

        return DegreeResource::collection($degrees);
    }
}