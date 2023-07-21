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
                        <a href="{{route('employee.create')}}" class="btn btn-primary float-end">登録</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th style="width:14%">ID</th>
                        <th style="width:14%">社員番号</th>
                        <th style="width:14%">氏名</th>
                        <th style="width:30%">部署</th>
                        <th style="width:14%">性別</th>
                        <th style="width:14%"></a></th>
                    </tr>
                <tbody>
                    @foreach ($employee as $emp)
                    <tr>
                        {{-- <td>{{++$i}}</td> --}}
                        <td><a href="{{route('employee.show', $emp->ID)}}">{{$emp->ID}}</a></td>
                        <td>{{$emp->社員番号}}</td>
                        <td>{{$emp->氏名}}</td>
                        <td>{{$emp->部署}}</td>
                        <td>{{$emp->性別}}</td>
                        <td>
                            <a href="{{route('employee.edit', $emp->ID)}}" class="btn btn-primary">編集</a>
                            <a href="delete/{{$emp->ID}}" onclick="return confirm('Are you really want to delete?')" class="btn btn-danger">削除</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
