@extends('layout.main')
@section('title','Đăn kí thông tin')


@section('content')
  <body>
            <div class="container">
                <button class="btn btn-success"><a href="/register">Add</a></button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abc as $item)


                        <tr>
                           <td>{{$item['name']}}</td>
                           <td>{{$item['email']}}</td>
                           <td>{{$item['pass']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

</body>
@endsection
