<?php

namespace App\Http\Controllers;

use App\Services\AirFix;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardController extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * 显示特定一个报修的详情
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // TODO 输入校验
        // $this->validate(...);

        // TODO 调用Service处理业务
        // AirFix::show(...);
        return AirFix::show($id);
        // TODO 输出结果
        // return [...];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 操作报修卡片
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO 输入校验
        // $this->validate(...);

        // TODO 调用Service处理业务
        // 未处理：接手 / 拒绝受理并说明原因；
        // 进行中：完结 / 放弃并说明原因；
        // 完结：返工
        // AirFix::handle(...);
        return AirFix::handle($id,$request->all());
        // TODO 输出结果
        // return [...];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
