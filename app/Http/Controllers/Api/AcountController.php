<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Acount;
use App\Http\Requests\StoreAcountRequest;
use App\Http\Resources\AcountResource;
use Illuminate\Http\Request;

class AcountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $acounts = Acount::all();
        return AcountResource::collection($acounts);
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
    public function store(StoreAcountRequest $request)
    {
        $acounts = Acount::create($request->all());
        return new AcountResource($acounts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acount  $acount
     * @return \Illuminate\Http\Response
     */
    public function show(Acount $acount)
    {
        return $acount;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acount  $acount
     * @return \Illuminate\Http\Response
     */
    public function edit(Acount $acount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acount  $acount
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAcountRequest $request, Acount $acount)
    {
        $acount->update($request->all());
        return new AcountResource($acount);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acount  $acount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acount $acount)
    {
        $acount->delete();
        return response(null, 204);
    }

    public function getAmounts(Acount $acount)
    {
        return $acount->amounts;
    }
}
