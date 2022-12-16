<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Amount;
use App\Http\Requests\StoreAmountRequest;
use App\Http\Resources\AmountResource;
use Illuminate\Http\Request;

class AmountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $amounts = Amount::all();
        return AmountResource::collection($amounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAmountRequest $request)
    {
        $amounts = Amount::create($request->all());
        return new AmountResource($amounts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amount  $Amount
     * @return \Illuminate\Http\Response
     */
    public function show(Amount $amount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amount  $Amount
     * @return \Illuminate\Http\Response
     */
    public function edit(Amount $amount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amount  $Amount
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAmountRequest $request, Amount $amount)
    {
        $amount->update($request->all());
        return new AmountResource($amount);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amount  $Amount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amount $amount)
    {
        $amount->delete();
        return response(null, 204);
    }
}
