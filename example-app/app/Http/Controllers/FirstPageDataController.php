<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFirstPageDataRequest;
use App\Http\Requests\UpdateFirstPageDataRequest;
use App\Models\FirstPageData;

class FirstPageDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = FirstPageData::all();
        return view('page.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFirstPageDataRequest $request)
    {
        $model = FirstPageData::query()->create($request->validated());
        return redirect('/page');
    }

    /**
     * Display the specified resource.
     */
    public function show(FirstPageData $model)
    {
        return view('page', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FirstPageData $firstPageData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFirstPageDataRequest $request, FirstPageData $firstPageData, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FirstPageData $firstPageData)
    {
        //
    }
}
