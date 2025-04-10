<div class="card-body p-0">
    <div class="table-responsive p-3">
        <table class="table" id="requirements-table">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>諮詢類型</th>
                    <th>身分別</th>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>Email</th>
                    <th>地址</th>
                    <th>內容</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requirements as $requirement)
                    <tr>
                        <td>{{ $requirement->id }}</td>
                        <td>{{ $requirement->type }}</td>
                        <td>{{ $requirement->identity }}</td>
                        <td>{{ $requirement->name }}</td>
                        <td>{{ $requirement->phone }}</td>
                        <td>{{ $requirement->email }}</td>
                        <td>{{ $requirement->address }}</td>
                        <td>{{ $requirement->message }}</td>
                        <td style="width: 120px">
                            {!! Form::open(['route' => ['admin.requirements.destroy', $requirement->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                {{-- <a href="{{ route('admin.requirements.show', [$requirement->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.requirements.edit', [$requirement->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-edit"></i>
                                </a> --}}
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

    {{-- <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $requirements])
        </div>
    </div> --}}
</div>
