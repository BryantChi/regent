<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateRequirementRequest;
use App\Http\Requests\Admin\UpdateRequirementRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\RequirementRepository;
use Illuminate\Http\Request;
use Flash;

class RequirementController extends AppBaseController
{
    /** @var RequirementRepository $requirementRepository*/
    private $requirementRepository;

    public function __construct(RequirementRepository $requirementRepo)
    {
        $this->requirementRepository = $requirementRepo;
    }

    /**
     * Display a listing of the Requirement.
     */
    public function index(Request $request)
    {
        $requirements = $this->requirementRepository->paginate(10);

        return view('admin.requirements.index')
            ->with('requirements', $requirements);
    }

    /**
     * Show the form for creating a new Requirement.
     */
    public function create()
    {
        return view('admin.requirements.create');
    }

    /**
     * Store a newly created Requirement in storage.
     */
    public function store(CreateRequirementRequest $request)
    {
        $input = $request->all();

        $requirement = $this->requirementRepository->create($input);

        Flash::success('需求表單新增成功。');

        return redirect(route('admin.requirements.index'));
    }

    /**
     * Display the specified Requirement.
     */
    public function show($id)
    {
        $requirement = $this->requirementRepository->find($id);

        if (empty($requirement)) {
            Flash::error('Requirement not found');

            return redirect(route('admin.requirements.index'));
        }

        return view('admin.requirements.show')->with('requirement', $requirement);
    }

    /**
     * Show the form for editing the specified Requirement.
     */
    public function edit($id)
    {
        $requirement = $this->requirementRepository->find($id);

        if (empty($requirement)) {
            Flash::error('Requirement not found');

            return redirect(route('admin.requirements.index'));
        }

        return view('admin.requirements.edit')->with('requirement', $requirement);
    }

    /**
     * Update the specified Requirement in storage.
     */
    public function update($id, UpdateRequirementRequest $request)
    {
        $requirement = $this->requirementRepository->find($id);

        if (empty($requirement)) {
            Flash::error('Requirement not found');

            return redirect(route('admin.requirements.index'));
        }

        $requirement = $this->requirementRepository->update($request->all(), $id);

        Flash::success('需求表單更新成功。');

        return redirect(route('admin.requirements.index'));
    }

    /**
     * Remove the specified Requirement from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $requirement = $this->requirementRepository->find($id);

        if (empty($requirement)) {
            Flash::error('Requirement not found');

            return redirect(route('admin.requirements.index'));
        }

        $this->requirementRepository->delete($id);

        Flash::success('需求表單刪除成功。');

        return redirect(route('admin.requirements.index'));
    }
}
