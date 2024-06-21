<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PlanRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $plans = Plan::paginate();

        return view('plan.index', compact('plans'))
            ->with('i', ($request->input('page', 1) - 1) * $plans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $plan = new Plan();

        return view('plan.create', compact('plan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanRequest $request): RedirectResponse
    {
        Plan::create($request->validated());

        return Redirect::route('plans.index')
            ->with('success', 'Plan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $plan = Plan::find($id);

        return view('plan.show', compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $plan = Plan::find($id);

        return view('plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlanRequest $request, Plan $plan): RedirectResponse
    {
        $plan->update($request->validated());

        return Redirect::route('plans.index')
            ->with('success', 'Plan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Plan::find($id)->delete();

        return Redirect::route('plans.index')
            ->with('success', 'Plan deleted successfully');
    }
}
