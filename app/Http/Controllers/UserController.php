<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
      
     $users=User::all();
        
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
       

        return redirect()->route('users.index')->with('success',__('تم الاضافة بنجاح'));
    }

    public function edit(User $user,$id)
    {
    //dd('dd');
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));

    }
    public function update(Request $request , $id){
        $user=User::findOrFail($id);
       $user = User::whereId($id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

return redirect()->route('users.index')->with('success' ,__('تم التعديل بنجاح'));

    }
    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', __('تم الحذف بنجاح'));
         }
     
}
