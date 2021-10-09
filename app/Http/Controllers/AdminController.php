<?php

namespace App\Http\Controllers;


use App\Http\Request;
use App\Models\Admin;
use Illuminate\Http\Request as HttpRequest;

class AdminController extends Controller
{

    public function read(HttpRequest $request)
    {
        $data = Admin::all();
        $pagination = 10;
        return view('admin_list', [
            "title" => "Data Admin",
            "admins" => $data
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function add()
    {
        return view('admin_form', [
            "title" => "Data Admin"
        ]);
    }

    // https://stackoverflow.com/questions/17510355/define-default-values-for-laravel-form-fields

    public function store(HttpRequest $request)
    {
        $admin = new Admin();
        $admin->username_admin = $request->input('username_admin');
        $admin->password_admin = $request->input('password_admin');
        $admin->usertype_admin = $request->input('usertype_admin');
        $admin->fullname_admin = $request->input('fullname_admin');
        $admin->save();
        return redirect()->back()->with('status', 'Added data sucessfully');
    }

    public function delete($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect()->back()->with('statusDelete', 'Delete data sucessfully');
    }

    public function edit($id)
    {
        $data = Admin::find($id);
        return view('admin_form', compact('data'));
    }

    public function update(HttpRequest $request, $id)
    {
        $updateData = $request->validate([
            'username_admin' => 'required',
            'password_admin' => 'required',
            'usertype_admin' => 'required',
            'fullname_admin' => 'required'
        ]);
        Admin::whereId($id)->update($updateData);
        return redirect()->back()->with('statusUpdate', 'Update data sucessfully');
    }

}
