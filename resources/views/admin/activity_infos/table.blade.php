<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="activity-infos-table">
            <thead>
                <tr>
                    <th>標題</th>
                    <th>分類</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activityInfos as $activityInfo)
                    <tr>
                        <td>{{ $activityInfo->title }}</td>
                        <td>{{ \App\Models\Admin\Classification::find($activityInfo->classification_id)->name }}</td>
                        <td style="width: 120px">
                            {!! Form::open(['route' => ['admin.activityInfos.destroy', $activityInfo->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                {{-- <a href="{{ route('admin.activityInfos.show', [$activityInfo->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-eye"></i>
                                </a> --}}
                                <a href="{{ route('admin.activityInfos.edit', [$activityInfo->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                    'type' => 'button',
                                    'class' => 'btn btn-danger btn-sm',
                                    'onclick' => "return check(this)",
                                ]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $activityInfos])
        </div>
    </div>
</div>
