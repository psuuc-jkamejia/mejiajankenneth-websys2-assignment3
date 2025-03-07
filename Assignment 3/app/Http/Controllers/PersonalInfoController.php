<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;

class PersonalInfoController extends Controller
{
    public function create()
    {
        return view('info');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'sex' => 'required|in:Male,Female',
            'mob_no' => 'required|regex:/^09[0-9]{9}$/',
            'tel_no' => 'nullable|numeric',
            'bday' => 'required|date',
            'add' => 'required',
            'email' => 'required|email|max:100',
            'web' => 'nullable|url',
        ]);

        return back()->with('success', 'Information submitted successfully!');
    }
}