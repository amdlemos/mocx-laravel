<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('persons.index', [
            'persons' => Person::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('persons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:100|min:3',
                'birthday' => 'required',
                'cpf' => 'required|cpf|unique:people,cpf'
            ],
            [
                'name.required' => 'Nome é obrigatório.',
                'name.max' => 'Máximo de 100 caracteres',
                'name.min' => 'Míximo de 3 caracteres',

                'birthday.required' => 'Data de nascimento é obrigatório.',

                'cpf.required' => 'CPF é obrigatório',
                'cpf.cpf' => 'CPF inválido.',
                'cpf.unique' => 'CPF já existe.',
            ]
        );

        $person = Person::create($request->all());

        Validator::make($person, 'cpf', ['cpf' => 'CPF inválido']);

        return View('persons.success');
    }
    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
