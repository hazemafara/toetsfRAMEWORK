<?php

namespace App\Http\Controllers;

use App\Models\Person;


use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('person.index', ['persons' => $persons]);
    }

    public function create()
    {
        return view('person.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required'
        ]);

        $newPerson = Person::create($data);

        return redirect(route('person.index'))->with('success', 'Person Created Successfully');
    }

    public function edit(Person $person)
    {
        return view('person.edit', ['person' => $person]);
    }

    public function update(Person $person, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required'
        ]);

        $person->update($data);

        return redirect(route('person.index'))->with('success', 'Person Updated Successfully');
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect(route('person.index'))->with('success', 'Person Deleted Successfully');
    }
}
