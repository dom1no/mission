<?php

namespace App\Http\Controllers\Admin;

use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecializationController extends Controller
{
    public function index()
    {
        $specializations = Specialization::all();

        return view('admin.specialization.index', compact('specializations'));
    }

    public function create()
    {
        return view('admin.specialization.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:specializations,name',
        ]);

        $specialization = new Specialization();
        $specialization->name = $request->name;
        $specialization->save();

        return redirect()->route('admin.specialization.index');
    }

    public function edit(Specialization $specialization)
    {
        return view('admin.specialization.edit', compact('specialization'));
    }

    public function update(Request $request, Specialization $specialization)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:specializations,name,' . $specialization->id,
        ]);

        $specialization->name = $request->name;
        $specialization->save();

        return redirect()->route('admin.specialization.index');
    }

    public function destroy(Specialization $specialization)
    {
        $specialization->delete();

        return back();
    }
}
