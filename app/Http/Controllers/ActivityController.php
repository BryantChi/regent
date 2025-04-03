<?php

namespace App\Http\Controllers;

use App\Models\Admin\ActivityInfo;
use App\Models\Admin\Classification;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function index(Request $request)
    {
        $seoInfo = SeoSettingRepository::getInfo('/activity');
        // 取得所有分類
        $classifications = Classification::all();

        // 建立查詢，預設取得所有案例
        $query = ActivityInfo::query();

        // 如果有選擇分類，過濾案例
        if ($request->filled('classification_id')) {
            $query->where('classification_id', $request->input('classification_id'));
        }

        // 如果有搜尋關鍵字，依項目標題搜尋
        // if ($request->filled('search')) {
        //     // $query->where('title', 'like', '%' . $request->input('search') . '%');
        //     $query->where(function ($query) use ($request) {
        //         $query->where('title', 'like', '%' . $request->input('search') . '%')
        //               ->orWhere('content', 'like', '%' . $request->input('search') . '%');
        //     });
        // }

        // 取得案例，並分頁顯示
        $activities = $query->orderBy(
            'created_at',
            'desc'
        )->paginate(10);

        return view('activity', compact('classifications', 'activities', 'seoInfo'));
    }

    public function show($id, Request $request)
    {
        $seoInfo = SeoSettingRepository::getInfo('/activity');
        // 取得案例
        $activity = ActivityInfo::findOrFail($id);

        $classifications = Classification::all();

        // 取得查詢字串中的 classification_id
        $selectedClassification = $request->query('classification_id');

        // 取得目前選擇的分類
        // $selectedClassification = $request->input('classification_id');

        return view('activity-details', compact('activity', 'classifications', 'selectedClassification', 'seoInfo'));
    }
}
