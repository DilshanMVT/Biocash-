<?php

namespace App\Http\Controllers;

use App\Models\Fingerprint;
use Illuminate\Http\Request;

class FingerprintController extends Controller
{
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'user_id' => 'required|integer',
    //         'fingerprint_data' => 'required',
    //     ]);

    //     Fingerprint::create([
    //         'user_id' => $request->input('user_id'),
    //         'fingerprint_data' => $request->input('fingerprint_data'),
    //     ]);

    //     return response()->json(['message' => 'Fingerprint data stored successfully']);
    // }
}
