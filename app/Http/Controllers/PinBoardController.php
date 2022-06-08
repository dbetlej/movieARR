<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePinBoardRequest;
use App\Http\Requests\UpdatePinBoardRequest;
use App\Models\PinBoard;

class PinBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePinBoardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePinBoardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PinBoard  $pinBoard
     * @return \Illuminate\Http\Response
     */
    public function show(PinBoard $pinBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PinBoard  $pinBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(PinBoard $pinBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePinBoardRequest  $request
     * @param  \App\Models\PinBoard  $pinBoard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePinBoardRequest $request, PinBoard $pinBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PinBoard  $pinBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(PinBoard $pinBoard)
    {
        //
    }
}
