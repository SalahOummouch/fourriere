<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\DataTables\UsersDataTable;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function userlist()
    {
       $users =User::all();
       return view('user.userlist', compact('users'));
    }

    public function create()
    {
        
        return view('user.add');
    }
    
    public function store(UserRequest $request) {
        dd('users');
        $data = $request->all();
        // $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('userlist')->with('status', 'Added successfully');
    }
    // public function store(UserRequest $request)
    // {
    //     dd('add');
    //     $data = $request->all();
    
    //     $data['password'] = bcrypt($data['password']);
    //     User::create($data);
    //     return redirect()->route('userlist')->with('status', 'Added successfully');
    // }

    public function show($id)
    {
        $user = User::with('userProfile')->findOrFail($id);
        
        //$profileImage = getSingleMedia($data, 'profile_image');

        return view('users.profile', compact('data', 'profileImage'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        

        // $data['user_type'] = $data->roles->pluck('id')[0] ?? null;

        // $roles = Role::where('status',1)->get()->pluck('title', 'id');

        //$profileImage = getSingleMedia($data, 'profile_image');

        return view('user.edit', compact('users'));
    }

    public function update(UserRequest $request, $id) {
        dd('add');
        $data = $request->except('_token','_method');
        User::where('id',$id)->update($data);
        return redirect()->route('userlist')->with('status', 'Edited Successfully');
     }

    // public function update(UserRequest $request, $id)
    // {
    //     dd($request->all());
    //     $user = User::findOrFail($id);

    //     // $role = Role::find($request->user_role);
    //     // if(env('IS_DEMO')) {
    //     //     if($role->name === 'admin') {
    //     //         return redirect()->back()->with('errors', 'Permission denied.');
    //     //     }
    //     // }
    //     // $user->assignRole($role->name);

    //     $request['password'] = $request->password != '' ? bcrypt($request->password) : $user->password;

    //     // User user data...
    //     $user->fill($request->all())->update();

    //     // Save user image...
    //     // if (isset($request->profile_image) && $request->profile_image != null) {
    //     //     $user->clearMediaCollection('profile_image');
    //     //     $user->addMediaFromRequest('profile_image')->toMediaCollection('profile_image');
    //     // }

    //     // user profile data....
    //     $user->users->fill($request->user)->update();

    //     // if(auth()->check()){
    //     //     return redirect()->route('users.index')->withSuccess(__('message.msg_updated',['name' => __('message.user')]));
    //     // }
    //     return redirect()->route('userlist');

    // }

    

    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     // $status = 'errors';
    //     //$message= __('global-message.delete_form', ['form' => __('users.title')]);

    //     if($user!='') {
    //         $user->delete();
    //         $status = 'success';
    //         //$message= __('global-message.delete_form', ['form' => __('users.title')]);
    //     }

    //     if(request()->ajax()) {
    //         return response()->json(['status' => true, 'message' => $message, 'datatable_reload' => 'dataTable_wrapper']);
    //     }

    //     return redirect()->back()->with($status,$message);

    // }

    public function destroy($id) {
        $user = User::findOrFail($id);
        if($user!=''){
            $user->delete();
        }
        return redirect()->route('userlist')->with('status', 'Deleted');
    }

}
