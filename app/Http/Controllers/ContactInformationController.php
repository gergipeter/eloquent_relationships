<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use Illuminate\Http\Request;

class ContactInformationController extends Controller
{
    public function index()
    {
        $contactInformations = ContactInformation::paginate(10);
        return view('contactInformations.index', ['contactInformations' => $contactInformations]);
    }

    public function create()
    {
        return view('contactInformations.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'student_id' => 'required|exists:students,id',
            'address' => 'required|string',
        ]);

        ContactInformation::create($request->all());

        return redirect()->route('contactInformations.index');
    }

    public function show(ContactInformation $contactInformation)
    {
        return view('contactInformations.show', ['contactInformation' => $contactInformation]);
    }

    public function edit(ContactInformation $contactInformation)
    {
        return view('contactInformations.edit', ['contactInformation' => $contactInformation]);
    }

    public function update(Request $request, ContactInformation $contactInformation)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'address' => 'required|string',
        ]);

        $contactInformation->update($request->all());

        return redirect()->route('contactInformations.index');
    }

    public function destroy(ContactInformation $contactInformation)
    {
        $contactInformation->delete();
        return redirect()->route('contactInformations.index');
    }
}
