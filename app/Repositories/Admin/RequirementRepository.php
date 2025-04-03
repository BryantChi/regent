<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Requirement;
use App\Repositories\BaseRepository;

class RequirementRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'type',
        'identity',
        'name',
        'phone',
        'email',
        'address',
        'message'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Requirement::class;
    }
}
