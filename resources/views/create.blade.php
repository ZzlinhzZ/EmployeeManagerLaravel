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
            <form action="{{route('employee.store')}}" method="POST">
                @csrf
                <table class="table table-borderless">
                    <tr>
                        <th>社員番号 </th>
                        <th><input type="text" class="form-control" name="社員番号" value="" required/></th>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <th><input type="text" class="form-control" name="氏名" value="" required/></th>
                    </tr>
                    <tr>
                        <th>部署 </th>
                        <th><select class="form-select" name="部署">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select></th>
                    </tr>
                    <tr>
                        <th>性別 </th>
                        <th>
                            <input class="form-check-input" type="radio" name="性別" value="男" checked>男
                            <input class="form-check-input" type="radio" name="性別" value="女">女
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><input class="btn btn-secondary" type="submit" value="登録" name="確認"/></th>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
@endsection
