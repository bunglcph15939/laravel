@extends('layout.main')
@section('title','Đăn kí thông tin')


@section('content')
<a href="{{Route('addsp')}}"><button class="btn btn-success">Add</button></a>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>image</th>
            <th>chức năng</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection
