@extends('layout.main')
@section('title','Đăn kí thông tin')


@section('content')


    <div class="container">
                     <h1> Form Đăng kí</h1>
                     <form action="{{Route('aa')}}" method="get">
                        <div class="form-group">
                            <label for="">Name </label>
                            <input type="text"
                              class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">

                          </div>
                          <div class="form-group">
                            <label for="">email </label>
                            <input type="text"
                              class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">

                          </div>
                          <div class="form-group">
                            <label for="">Password </label>
                            <input type="text"
                              class="form-control" name="pass" id="" aria-describedby="helpId" placeholder="">

                          </div>
                          <button type="submit" class="btn btn-success">gửi</button>
                     </form>
                    </div>
@endsection
