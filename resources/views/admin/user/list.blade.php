@extends('layout.main');

@section('title','quản lý người dùng');

@section('content-title','Quản lý người dùng');
@section('content')

<div >
    <a class="btn btn-success m-2" href="{{route('users.create')}}">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tên</th>
                <th>MÃ tài khoản</th>
                <th>Email</th>
                <th>ảnh</th>
                <th>Quyền</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td><img src="{{asset($item->avarta)}}" width="100px" alt=""></td>
                <td>{{$item->role==1 ?'ABC' :'N/A'}}</td>
                <td>
                    <a  class="btn btn-warning" href="{{route('users.edit',$item->id)}}">Sửa</a>
                <form action="{{route('users.delete',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Xóa</button>
            </form>
                </td>

            </tr>


            @endforeach

        </tbody>

    </table>
    <div class="d-flex justify-content-center">
        {{$user->links()}}

    </div>
@endsection
