<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     *  会員一覧画面
     * 
     * @param User $users
     * @return Response
     */
    public function index(User $users)
    {
        $users = User::orderBy('id', 'asc')->get();
        return view('users.index', ['users' => $users]);
    }

    /**
     *  会員登録画面
     * 
     *  @param Request $request
     *  @return Response
     */
    public function register(Request $request)
    {
        return view('users.register');
    }

    /**
     *  会員編集画面
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', ['user' => $user]);
    }

    /**
     *  会員登録
     * 
     *  @param Request $request
     *  @return Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:15'],
            'phone' => ['required', 'digits_between:10,11'],
            'email' => ['required', 'email', 'max:254']
        ];

        $this->validate($request, $rules);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect('/users');
    }

    /**
     * 編集処理
     * 
     * @param Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);

        $rules = [
            'name' => ['required', 'string', 'max:15'],
            'phone' => ['required', 'digits_between:10,11'],
            'email' => ['required', 'email', 'max:254']
        ];
        $this->validate($request, $rules);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect('/users');
    }

    /**
     *  ユーザー削除処理
     *  @param Request $request
     *  @return Response
     */
    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect('/users');
    }
}