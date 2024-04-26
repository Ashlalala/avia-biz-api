<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use App\Http\Requests\StoreMsgRequest;
use App\Http\Requests\UpdateMsgRequest;

class MsgController extends Controller
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
     * @param  \App\Http\Requests\StoreMsgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMsgRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function show(Msg $msg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function edit(Msg $msg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMsgRequest  $request
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMsgRequest $request, Msg $msg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msg $msg)
    {
        //
    }
}
