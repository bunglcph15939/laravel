@extends('layout.main');

@section('title','Thêm mới người dùng');

@section('content-title','Thêm mới người dùng');
@section('content')
<div class="row">
    <div class="col-9">
    <form action="{{route('users.store')}}/{{isset($user)? $user->id:''}}" method='post' enctype="multipart/form-data">
        @if (isset($user))
        @method('PUT')
        @else @method('POST')
        @endif

        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" id="" value="{{isset($user)? $user->name:''}}"  placeholder="">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" value="{{isset($user)? $user->email:''}}" name="email" id=""  placeholder="">
          </div>

          <div class="form-group">
            <label for="">Password</label>
            <input type="{{isset($user)? 'hidden':'password'}}"    class="form-control" value="{{isset($user)? $user->password:''}}" name="password" id=""  placeholder="">
          </div>


          <div class="form-group">
            <label for="">Code</label>
            <input type="text" class="form-control" value="{{isset($user)? $user->code:''}}" name="code" id=""  placeholder="">
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" value="{{isset($user)? $user->username:''}}" name="username" id=""  placeholder="">
          </div>
          <div class="form-group">
            <label for="">avata</label>
            <input type="file" class="form-control-file" value="" name="avarta" id=""   placeholder="">
          </div>
          @if (isset($user))
          <input type="hidden" value="{{$user->avarta=$user->avarta}}" name="" id="">
          <div class="form-group">
            <img src="{{asset($user->avarta)}}" alt=""width="100px">
      </div>
          @endif

          <div class="form-froup">
            <label for="">PHân quyền</label>
            <select class="form-control" name="role" id="">
                <option value="0" @if (isset($user))
                {{$user->role==1 ?'selected' : ''}}@endif>Giáo viên</option>
                <option value="1"@if (isset($user))
                {{$user->role==1 ?'selected' : ''}}@endif>Sinh viên</option>
            </select>
          </div>
          <div class="form-froup">
            <label for="">Kích hoạt</label>
           <select class="form-control" name="status" id="">
            <option value="0" @if (isset($user))
                    {{$user->status==1 ?'selected' : ''}}@endif >Không kích hoạt</option>
            <option value="1" @if (isset($user))
                    {{$user->status==1 ?'selected' : ''}}@endif>Kích hoạt</option>
           </select>
          </div>

          <div>
            <button class="btn btn-primary m-2">Tạo mới</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
          </div>
    </form>
</div>
</div>
@endsection
