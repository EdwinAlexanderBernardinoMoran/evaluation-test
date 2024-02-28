<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinancesRequest;
use App\Models\Finance;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $finances = Finance::latest()->paginate();
        return view('finances.index', compact('finances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Finance $finance)
    {
        return view('finances.create', ['finance' => $finance]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFinancesRequest $request)
    {
        Finance::create($request->validated());

        return to_route('finances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Finance $finance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finance $finance)
    {
        return view('finances.edit', ['finance' => $finance]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreFinancesRequest $request, Finance $finance)
    {
        // dd($request->all());
        $finance->update($request->validated());

        return to_route('finances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finance $finance)
    {
        $finance->delete();

        return to_route('finances.index');
    }
}
