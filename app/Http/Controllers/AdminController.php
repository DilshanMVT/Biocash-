<?php

namespace App\Http\Controllers;

use App\Models\Inquirie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addInquiri(Request $request){
 //dd($request->all());

 $request->validate([
    'name' => 'required|max:80',
    'email' => 'required|max:60',
    'subject' => 'required|min:5|max:200',
    'message' => 'required',
]);

$inquirie = Inquirie::create([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'subject' => $request->input('subject'),
    'message' => $request->input('message'),
]);

if (!$inquirie) {
    // Handle user creation failure, if needed
    return redirect()->back()->withInput()->withErrors(['error' => 'Failed to send inquirie']);
}

return redirect()->route('main')->with('success', 'Inquirie send successfully!');
    }


public function viewInquirie(){

    $inquiries = Inquirie::get();

    return view('test',compact('inquiries'));
}
}
