<?php

namespace App\Http\Controllers;

use Github\Hook\GithubHook;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GithubHookController extends Controller
{
    /**
     * @api {get} /getNearbyPresent
     * @apiName getNearbyPresent
     * @apiGroup 06-Activity
     *
     * @apiDescription 查询附近卡券
     *
     * @apiHeader {String} uid  用户ID
     * @apiHeader {String} jd  经度
     * @apiHeader {String} wd  维度
     * @apiVersion 3.0.0
     * @apiSuccessExample Success-Response:
     *  HTTP/1.1 200 OK
     *  {
     *    "code" : 200,
     *    "detail" : "success",
     *    "data" : [
     *      {
     *          'name'=>'xx优惠券',
     *          'desc'=>'优惠多多',
     *          'jd'=>80,   #位置经度
     *          'wd'=>120,  #位置维度
     *          'type'=>'1',    #类型:1积分 2会员卡 3 代金券 4红包 5酬金等
     *          'value'=>'500', #针对类型的值
     *          'start_at'=>'2016-12-12 11:11:11',  #开始时间
     *          'end_at'=>'2017-12-12 11:11:11',    #结束时间
     *      },
     *      ...
     *    ]
     *  }
     */
    public function index()
    {
        //
        if(env("APP_DEBUG")){
            $hookModel = new GithubHook();
            $input_passwd = Request()->input('passwd');
            $hook_passwd = config('config.hook.hook_secret');
            if ($input_passwd == $hook_passwd){
                $hookModel->git_pull();
            }else{
                $hookModel->actionGit();
            }
        }

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
