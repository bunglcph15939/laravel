<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class UserController extends Controller
{
    public function index(){
        //$user=User::all();
        $user=User::select('id','name','username','email','role')


        ->get();
        $userPaginate=User::select('id','name','username','email','role','avarta')->paginate(5);

       return view('admin.user.list',[
        'user'=>$userPaginate
       ]);
    }
    public function delete(User $user){


        if($user){
            // $user=User::find($id);

           $posts=Post::where('user_id','=',$user->id)->get();
        //    foreach($posts as$post){
        //         $post->update(['user_id'=>0]);
        //    } update cách 1

        //update cách 2
        $postsIds=$posts->pluck('id');//lấy ra mảng id
        Post::WhereIn('id',$postsIds)->update(['user_id'=>0]);
           $user->delete();
          // dd($posts->pluck('id'));
         return redirect()->back();
        }
    }
    public function create(){
        return view('admin.user.create');

    }
    public function store(Request $request){
            $user = new User();
            $user->fill($request->all());
            if($request->hasFile('avarta')){
                //2.1 xử lý tên file để lưu
                //2.1 lưu file vào bộ nhớ
                //2.3 Lấy đường dẫn file lưu vào user
                $avarta=$request->avarta;
                $avartaName=$avarta->hashName();
                $avartaName=$request->name.'_'.$avartaName;
                $user->avarta=$avarta->storeAs('images/users',$avartaName);
                //lưu vào thư mục images/users
                // link vào config/filesysem.php mảng link public imgage storage img

            }
            $user->save();
            return redirect()->route('users.list');
            //3.Lưu user vào csdl
    }
    public function edit(User $user){
            return view('admin.user.create',[
                'user'=>$user

            ]);
    }
    public function save_edit(Request $request,$id){
            $user = User::findOrFail($id);
            $data = $request->all();
            if($request->hasFile('avarta')==true){
                $avarta=$request->avarta;
                $avartaName=$avarta->hashName();
                $avartaName=$request->name.'_'.$avartaName;
                $data['avarta']=$avarta->storeAs('images/users',$avartaName);
            }else{
                $data['avarta']=$user->avarta;
            }
            $user->update($data);
            return redirect()->route('users.list');
    }
}
