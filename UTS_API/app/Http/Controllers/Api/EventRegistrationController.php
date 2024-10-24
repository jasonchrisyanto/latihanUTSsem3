<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventRegistrationController extends Controller
{
    // Get all data
    public function index()
    {
        $data = EventRegistration::all();
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'data' => $data,
        ]);
    }

    // Insert new data
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'nama_event' => 'required|string|max:255',
            'tanggal_event' => 'required|date',
            'nomor' => 'required|string|unique:EventRegistration,nomor|max:100',
            'kategori' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'code' => 400,
                'message' => 'Failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        EventRegistration::create($request->all());

        return response()->json([
            'code' => 200,
            'message' => 'Success',
        ]);
    }
}
