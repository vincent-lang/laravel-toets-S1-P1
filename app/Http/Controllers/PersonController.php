<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('person.index', compact('persons'));
    }

    public function create()
    {
        return view('person.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required'
        ]);

        Person::create($data);

        return redirect(route('person.index'));
    }

    public function edit(Person $person)
    {
        return view('person.edit', compact('person'));
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

        return redirect(route('person.index'));
    }

    public function delete(Person $person)
    {

        $person->delete();

        return redirect(route('person.index'));
    }
}
