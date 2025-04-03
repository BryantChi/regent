<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateActivityInfoRequest;
use App\Http\Requests\Admin\UpdateActivityInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\ActivityInfoRepository;
use Illuminate\Http\Request;
use Flash;

class ActivityInfoController extends AppBaseController
{
    /** @var ActivityInfoRepository $activityInfoRepository*/
    private $activityInfoRepository;

    public function __construct(ActivityInfoRepository $activityInfoRepo)
    {
        $this->activityInfoRepository = $activityInfoRepo;
    }

    /**
     * Display a listing of the ActivityInfo.
     */
    public function index(Request $request)
    {
        $activityInfos = $this->activityInfoRepository->paginate(10);

        return view('admin.activity_infos.index')
            ->with('activityInfos', $activityInfos);
    }

    /**
     * Show the form for creating a new ActivityInfo.
     */
    public function create()
    {
        return view('admin.activity_infos.create');
    }

    /**
     * Store a newly created ActivityInfo in storage.
     */
    public function store(CreateActivityInfoRequest $request)
    {
        $input = $request->all();

        $activityInfo = $this->activityInfoRepository->create($input);

        Flash::success('活動訊息新增成功。');

        return redirect(route('admin.activityInfos.index'));
    }

    /**
     * Display the specified ActivityInfo.
     */
    public function show($id)
    {
        $activityInfo = $this->activityInfoRepository->find($id);

        if (empty($activityInfo)) {
            Flash::error('Activity Info not found');

            return redirect(route('admin.activityInfos.index'));
        }

        return view('admin.activity_infos.show')->with('activityInfo', $activityInfo);
    }

    /**
     * Show the form for editing the specified ActivityInfo.
     */
    public function edit($id)
    {
        $activityInfo = $this->activityInfoRepository->find($id);

        if (empty($activityInfo)) {
            Flash::error('Activity Info not found');

            return redirect(route('admin.activityInfos.index'));
        }

        return view('admin.activity_infos.edit')->with('activityInfo', $activityInfo);
    }

    /**
     * Update the specified ActivityInfo in storage.
     */
    public function update($id, UpdateActivityInfoRequest $request)
    {
        $activityInfo = $this->activityInfoRepository->find($id);

        if (empty($activityInfo)) {
            Flash::error('Activity Info not found');

            return redirect(route('admin.activityInfos.index'));
        }

        $activityInfo = $this->activityInfoRepository->update($request->all(), $id);

        Flash::success('活動訊息更新成功。');

        return redirect(route('admin.activityInfos.index'));
    }

    /**
     * Remove the specified ActivityInfo from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $activityInfo = $this->activityInfoRepository->find($id);

        if (empty($activityInfo)) {
            Flash::error('Activity Info not found');

            return redirect(route('admin.activityInfos.index'));
        }

        $this->activityInfoRepository->delete($id);

        Flash::success('活動訊息刪除成功。');

        return redirect(route('admin.activityInfos.index'));
    }
}
