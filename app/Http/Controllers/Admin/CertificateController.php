<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;



class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.index',compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'file' => 'required|max:2048',
            'date' => 'nullable|date',
        ]);

        $data = $request->only('title', 'issuer', 'date');

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('certificates', 'public');
        }

        Certificate::create($data);

        return redirect()->route('certificates.index')->with('success', 'Certificate added successfully!');
    }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $certificate = Certificate::findOrFail($id);
            return view('admin.certificates.show', compact('certificate'));
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $certificate = Certificate::findOrFail($id);
            return view('admin.certificates.edit', compact('certificate'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
                $certificate = Certificate::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'file' => 'nullable|max:2048',
            'date' => 'nullable|date',
        ]);

        $data = $request->only('title', 'issuer', 'date');

        if ($request->hasFile('file')) {

            if ($certificate->file && Storage::disk('public')->exists($certificate->file)) {
                Storage::disk('public')->delete($certificate->file);
            }

            $data['file'] = $request->file('file')->store('certificates', 'public');
        }

        $certificate->update($data);

        return redirect()->route('certificates.index')->with('success', 'Certificate updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $certificate = Certificate::findOrFail($id);


        if ($certificate->file && Storage::disk('public')->exists($certificate->file)) {
            Storage::disk('public')->delete($certificate->file);
        }

        $certificate->delete();

        return redirect()->route('certificates.index')->with('success', 'Certificate deleted successfully!');
    }
}
