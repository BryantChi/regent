<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateActivityInfoRequest;
use App\Http\Requests\Admin\UpdateActivityInfoRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\Classification;
use App\Repositories\Admin\ActivityInfoRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
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
        $classifications = Classification::all()->pluck('name', 'id');
        return view('admin.activity_infos.create')->with('classifications', $classifications);
    }

    /**
     * Store a newly created ActivityInfo in storage.
     */
    public function store(CreateActivityInfoRequest $request)
    {
        $input = $request->all();

        $input['image'] = $this->processImage($request->file('image'), 'cover_front_image');

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

        $classifications = Classification::all()->pluck('name', 'id');

        return view('admin.activity_infos.edit')->with('activityInfo', $activityInfo)
            ->with('classifications', $classifications);
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

        $input = $request->all();

        $input['image'] = $this->handleImageUpload($request->file('image'), $activityInfo['image'], 'cover_front_image');

        $activityInfo = $this->activityInfoRepository->update($input, $id);

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

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }
}
