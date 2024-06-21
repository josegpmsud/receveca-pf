<?php

namespace App\Http\Controllers;

use App\Models\Uso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UsoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UsoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $usos = Uso::paginate();

        return view('uso.index', compact('usos'))
            ->with('i', ($request->input('page', 1) - 1) * $usos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $uso = new Uso();

        return view('uso.create', compact('uso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsoRequest $request): RedirectResponse
    {
        Uso::create($request->validated());

        return Redirect::route('usos.index')
            ->with('success', 'Uso created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $uso = Uso::find($id);

        return view('uso.show', compact('uso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $uso = Uso::find($id);

        return view('uso.edit', compact('uso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsoRequest $request, Uso $uso): RedirectResponse
    {
        $uso->update($request->validated());

        return Redirect::route('usos.index')
            ->with('success', 'Uso updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Uso::find($id)->delete();

        return Redirect::route('usos.index')
            ->with('success', 'Uso deleted successfully');
    }
}
