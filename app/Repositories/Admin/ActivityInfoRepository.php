<?php

namespace App\Repositories\Admin;

use App\Models\Admin\ActivityInfo;
use App\Repositories\BaseRepository;

class ActivityInfoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'content',
        'image',
        'classification_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ActivityInfo::class;
    }
}
