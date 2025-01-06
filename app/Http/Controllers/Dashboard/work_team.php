<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\work_teams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class work_team extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $work_team = work_teams::all();
        return view('merchant.work_team.index', compact('work_team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.work_team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'facebook' => ['nullable'],
            'twitter' => ['nullable'],
            'instagram' => ['nullable'],
            'image' => 'image|required',
        ]);

        $data = $request->except('image');
        $data['image'] = $this->uploadImage($request);

        work_teams::create($data);
        return Redirect::route('workTeam.index')->with('success', 'Product created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $work_team = work_teams::findOrFail($id);
        return view('merchant.work_team.edit', compact('work_team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $work_team = work_teams::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string'],
            'facebook' => ['nullable'],
            'twitter' => ['nullable'],
            'instagram' => ['nullable'],
            'image' => 'image|nullable',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request);
        } else {
            $data['image'] = $work_team->image;
        }

        $work_team->update($data);

        return Redirect::route('workTeam.index')->with('success', 'The person is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $work_team = work_teams::findOrFail($id);
        $work_team->delete();

        return Redirect::route('workTeam.index')->with('success', 'The person has been deleted successfully!');
    }

    /**
     * Upload the image to storage.
     */
    public function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return null;
        }

        $file = $request->file('image');
        $path = $file->store('uploads', [
            'disk' => 'public'
        ]);

        return $path;
    }
}
