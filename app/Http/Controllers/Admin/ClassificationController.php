<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateClassificationRequest;
use App\Http\Requests\Admin\UpdateClassificationRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\ClassificationRepository;
use Illuminate\Http\Request;
use Flash;

class ClassificationController extends AppBaseController
{
    /** @var ClassificationRepository $classificationRepository*/
    private $classificationRepository;

    public function __construct(ClassificationRepository $classificationRepo)
    {
        $this->classificationRepository = $classificationRepo;
    }

    /**
     * Display a listing of the Classification.
     */
    public function index(Request $request)
    {
        $classifications = $this->classificationRepository->paginate(10);

        return view('admin.classifications.index')
            ->with('classifications', $classifications);
    }

    /**
     * Show the form for creating a new Classification.
     */
    public function create()
    {
        return view('admin.classifications.create');
    }

    /**
     * Store a newly created Classification in storage.
     */
    public function store(CreateClassificationRequest $request)
    {
        $input = $request->all();

        $classification = $this->classificationRepository->create($input);

        Flash::success('活動分類新增成功。');

        return redirect(route('admin.classifications.index'));
    }

    /**
     * Display the specified Classification.
     */
    public function show($id)
    {
        $classification = $this->classificationRepository->find($id);

        if (empty($classification)) {
            Flash::error('Classification not found');

            return redirect(route('admin.classifications.index'));
        }

        return view('admin.classifications.show')->with('classification', $classification);
    }

    /**
     * Show the form for editing the specified Classification.
     */
    public function edit($id)
    {
        $classification = $this->classificationRepository->find($id);

        if (empty($classification)) {
            Flash::error('Classification not found');

            return redirect(route('admin.classifications.index'));
        }

        return view('admin.classifications.edit')->with('classification', $classification);
    }

    /**
     * Update the specified Classification in storage.
     */
    public function update($id, UpdateClassificationRequest $request)
    {
        $classification = $this->classificationRepository->find($id);

        if (empty($classification)) {
            Flash::error('Classification not found');

            return redirect(route('admin.classifications.index'));
        }

        $classification = $this->classificationRepository->update($request->all(), $id);

        Flash::success('活動分類更新成功。');

        return redirect(route('admin.classifications.index'));
    }

    /**
     * Remove the specified Classification from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $classification = $this->classificationRepository->find($id);

        if (empty($classification)) {
            Flash::error('Classification not found');

            return redirect(route('admin.classifications.index'));
        }

        $this->classificationRepository->delete($id);

        Flash::success('活動分類刪除成功。');

        return redirect(route('admin.classifications.index'));
    }
}
