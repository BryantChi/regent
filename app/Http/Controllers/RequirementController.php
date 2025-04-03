<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\CreateRequirementRequest;
use App\Models\Admin\Requirement;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    // 需求表單頁面送出
    public function store(CreateRequirementRequest $request)
    {
        $input = $request->all();

        // 儲存需求表單資料
        // 這裡可以使用模型來儲存資料到資料庫
        $requirement = Requirement::create($input);


        // 回傳成功訊息
        return redirect()->back()->with('success', '需求表單已送出！');
    }


}
