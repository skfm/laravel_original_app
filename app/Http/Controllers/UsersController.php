<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditUser;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            abort(404);
        } elseif (Auth::id() !== User::find($id)->id) {
            abort(403);
        }

        return view('user/show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            abort(404);
        } elseif (Auth::id() !== User::find($id)->id) {
            abort(403);
        }

        return view('user/edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUser $request, $id)
    {
        $user = \App\User::findOrFail($id);

        if ($request->file('image_path')->isValid())
        {
            $disk = Storage::disk('s3');
            $fileName = $disk->put('', $request->file('image_path'));
            $path = $request->file('image_path')->store('public/result_img');
            $user->image_path = basename($path);
            $user->name = $request->name;
            $user->content = $request->content;

            $user->save();
        }

        return view('user/show', [
            'user' => $user,
        ]);
    }

    /**
     * Confirmation before withdrawing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = User::find($id);

        if (is_null($user)) {
            abort(404);
        } elseif (Auth::id() !== User::find($id)->id) {
            abort(403);
        }

        return view('user/delete', [
            'user' => $user,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function result($id)
    {
        $user = User::find($id);

        return view('result', [
            'user' => $user,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrFail($id);

        $user->delete();

        return redirect('/');
    }
}
