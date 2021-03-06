<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = new User($request->only('name', 'email'));
            $user->password = Hash::make($request['password']);
            $user->save();

            if (!empty($request->file('file'))) {
                $fileName = $request->file('file')->getClientOriginalName();
                $path = $request->file('file')->storeAs($user->id, $fileName, 'public');
                $user->path = $path;
                $user->save();
            }
        });
        return redirect()->route('user.index')->withSuccess(__('pages/sections/notifications.user_created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     *  Show the form to edit my profile
     *  @param Illuminate\Http\Request $request
     *  @return  view
     */
    public function myProfile(Request $request)
    {
        $user = auth()->user();
        return view('user.my-profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        DB::transaction(function () use ($request, $user) {
            $user->update($request->only('name', 'email'));
            if (!empty($request['password'])) {
                $user->password = Hash::make($request['password']);
            }
            $user->save();
        });
        return redirect()->route('user.index')->withSuccess(__('pages/sections/notifications.user_updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->withSuccess(__('pages/sections/notifications.user_deleted'));
    }

    public function photoChange(Request $request, User $user)
    {
        DB::transaction(function () use ($request, $user) {
            if (!empty($request->file('file'))) {

                if (!empty($user->path)) {
                    Storage::delete($user->path);
                }

                $fileName = $request->file('file')->getClientOriginalName();
                $path = $request->file('file')->storeAs($user->id, $fileName, 'public');
                $user->path = $path;
                $user->save();
            }
        });
        return back()->withSuccess(__('pages/sections/notifications.user_updated'));
    }
}
