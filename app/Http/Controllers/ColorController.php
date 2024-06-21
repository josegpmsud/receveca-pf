<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ColorRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $colors = Color::paginate();

        return view('color.index', compact('colors'))
            ->with('i', ($request->input('page', 1) - 1) * $colors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $color = new Color();

        return view('color.create', compact('color'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColorRequest $request): RedirectResponse
    {
        Color::create($request->validated());

        return Redirect::route('colors.index')
            ->with('success', 'Color created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $color = Color::find($id);

        return view('color.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $color = Color::find($id);

        return view('color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColorRequest $request, Color $color): RedirectResponse
    {
        $color->update($request->validated());

        return Redirect::route('colors.index')
            ->with('success', 'Color updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Color::find($id)->delete();

        return Redirect::route('colors.index')
            ->with('success', 'Color deleted successfully');
    }
}
