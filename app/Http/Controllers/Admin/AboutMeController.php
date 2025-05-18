<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutMeController extends Controller
{
    public function edit()
    {
        $about = AboutMe::first(); 
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = AboutMe::findOrFail($id);


        $data = $request->only('subtitle', 'title', 'description');

        if ($request->hasFile('image')) {
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            $imagePath = $request->file('image')->store('about_images', 'public');
            $data['image'] = $imagePath;
        }

        if ($request->hasFile('cv')) {
            if ($about->cv && Storage::disk('public')->exists($about->cv)) {
                Storage::disk('public')->delete($about->cv);
            }
            $file = $request->file('cv');
            $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
            $cvPath = $file->storeAs('cvs', $filename, 'public');
            $data['cv'] = $cvPath;
        }

        $about->update($data);
        // dd($data);
        return redirect()->back()->with('success', 'About Me updated successfully!!');
    }

}
