<?php

namespace App\Http\Controllers;

use App\Services\AirFix;
use Illuminate\Http\Request;

use App\Http\Requests;

class BoardController extends Controller
{
    /**
     * 罗列所有报修单
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO 输入校验，并获取筛选参数（未处理 / 进行中 / 完结）
        // $this->validate(...);

        // TODO 调用Service处理业务
        // AirFix::lists(...);
        return AirFix::lists();
        // TODO 输出结果
        // return [...];
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
