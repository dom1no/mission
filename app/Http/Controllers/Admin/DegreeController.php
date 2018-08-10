<?php

namespace App\Http\Controllers\Admin;

use App\Models\Degree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DegreeController extends Controller
{
    public function index()
    {
        $degrees = Degree::all();

        return view('admin.degree.index', compact('degrees'));
    }

    public function create()
    {
        return view('admin.degree.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:degrees,name',
        ]);

        $degree = new Degree();
        $degree->name = $request->name;
        $degree->save();

        return redirect()->route('admin.degree.index');
    }

    public function edit(Degree $degree)
    {
        return view('admin.degree.edit', compact('degree'));
    }

    public function update(Request $request, Degree $degree)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:degrees,name,' . $degree->id,
        ]);

        $degree->name = $request->name;
        $degree->save();

        return redirect()->route('admin.degree.index');
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();

        return back();
    }
}
