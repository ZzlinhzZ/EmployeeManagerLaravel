@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>iYell社員管理システム</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('employee.index')}}" class="btn btn-primary float-end">一覧</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('employee.update', $employee->ID)}}" method="POST">
                @csrf
                @method('PATCH')
                <table class="table table-borderless">
                    <tr>
                        <th>社員番号 </th>
                        <th><input class="form-control" type="text" name="社員番号" value="{{$employee->社員番号}}" required/></th>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <th><input class="form-control" type="text" name="氏名" value="{{$employee->氏名}}" required/></th>
                    </tr>
                    <tr>
                        <th>部署 </th>
                        <th><select class="form-select" name="部署" >
                            {{-- <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option> --}}
                            @if ($employee->部署 == "A")
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            @elseif ($employee->部署 == "B")
                                <option value="B">B</option>
                                <option value="A">A</option>
                                <option value="C">C</option>
                            @else ($employee->部署 == "C")
                                <option value="C">C</option>
                                <option value="B">B</option>
                                <option value="A">A</option>
                            @endif


                        </select></th>
                    </tr>
                    <tr>
                        <th>性別 </th>
                        <th>
                            @if ($employee->性別 == "男")
                                <input class="form-check-input" type="radio" name="性別" value="男" checked>男
                                <input class="form-check-input" type="radio" name="性別" value="女">女
                            @else
                            <input type="radio" name="性別" value="男" >男
                            <input type="radio" name="性別" value="女" checked>女
                            @endif
                        </th>
                    </tr>
                    <tr>
                        <th><a href=""></a></th>
                        <th><input class="btn btn-secondary" type="submit" value="確認" name="登録"/></th>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
