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
            <div class="col">
                <table class="table table-borderless">
                    @if($employee)
                        <tr>
                            <th style="width:25%">ID </th>
                            <th style="width:75%">{{$employee->ID}}</th>
                        </tr>
                        <tr>
                            <th>社員番号 </th>
                            <th>{{$employee->社員番号}}</th>
                        </tr>
                        <tr>
                            <th>氏名</th>
                            <th>{{$employee->氏名}}</th>
                        </tr>
                        <tr>
                            <th>部署 </th>
                            <th>{{$employee->部署}}</th>
                        </tr>
                        <tr>
                            <th>性別 </th>
                            <th>{{$employee->性別}}</th>
                        </tr>
                    @endif
                </table>
                <div><a href="{{route('employee.edit', $employee->ID)}}" class="btn btn-primary">修正</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
