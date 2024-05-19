<?php

namespace App\Http\Controllers;

use App\Models\Inquirie;
use Illuminate\Http\Request;

class InquirieController extends Controller
{
    public function deleteInquirie($id)
    {
        // Find the record by its ID
        $inquirie = Inquirie::find($id);

        if ($inquirie) {
            // Delete the record
            $inquirie->delete();

            return redirect()->route('home')->with('message', 'Record deleted successfully');
        } else {
            // Handle the case where the record is not found
            return redirect()->route('home')->with('error', 'Record not found');
        }

    }
}
