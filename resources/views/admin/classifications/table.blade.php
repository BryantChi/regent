<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="classifications-table">
            <thead>
            <tr>
                <th>名稱</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classifications as $classification)
                <tr>
                    <td>{{ $classification->name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.classifications.destroy', $classification->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.classifications.show', [$classification->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.classifications.edit', [$classification->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'button', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return check(this)"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $classifications])
        </div>
    </div>
</div>
