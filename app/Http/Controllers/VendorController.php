<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = Vendor::all();
        return response()->json($vendors);
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         // Define validation rules here
    //     ]);

    //     $vendor = Vendor::create($request->all());

    //     return response()->json(['message' => 'Form submitted successfully' , $vendor], 201); 


    // }
    public function store(Request $request)
    {
    $request->validate([
        'pan_number' => 'required|unique:vendors', // Ensure PAN number is unique
        'gst_number' => 'required|unique:vendors', // Ensure GST number is unique
        // Add other validation rules as needed
    ], [
        'pan_number.unique' => 'The provided PAN number is already registered.',
        'gst_number.unique' => 'The provided GST number is already registered.'
    ]);

    // If validation passes, create a new vendor
    $vendor = Vendor::create($request->all());

    return response()->json(['message' => 'Form submitted successfully', 'vendor' => $vendor], 201);
    }

    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);
        return response()->json($vendor);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Define validation rules here
        ]);

        $vendor = Vendor::findOrFail($id);
        $vendor->update($request->all());

        return response()->json($vendor, 200);
    }

    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();

        return response()->json(null, 204);
    }
}
