@extends('layout.main')
@section('title','Trang home ')


@section('content')
  <div class="container">
    <button class="btn btn-success"><a href="/register">Add</a></button>
    <div>
        Tên lớp:{{$class_name}}


    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Tuổi</th>
                <th>Địa chỉ</th>
                <th>email</th>
                <th>phone</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mang as $item)
            <tr>
                <td>{{$item['name']}}</td>
                <td>{{$item['age']}}</td>
                <td>{{$item['addr']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['phone']}}</td>
                <td>
                 @if ($item['status']==0)  kích hoạt
                 @else không kích hoạt
                @endif</td>
                <td><button class="btn btn-success">Gưi</button></td>
            </tr>
          @endforeach

        </tbody>
    </table>
  </div>

@endsection
