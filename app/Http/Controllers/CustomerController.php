<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customer;

use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{
    //
    public function create(){
        return view ('users.create');
    }

    public function validateRequest($request)
    {
        $request->validate([

            'fullname' => 'required|regex:/^[\w]+\s[\w]+\s[\w]+\s[\w]+/',
            'password' => 'required|min:8|max:16',
            'email'    => 'required',
            'phone'    => 'required|min:14|max:14',
            'Address'  => 'required',
            'NID'      => 'required|min:10|max:10',
            //'image'    => 'required|mimes:jpeg,jpg,png',
        ]);
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);

        if ($request->hasFile('image')) {

            $file     = $request->file('image') ;
            $ext      = $file->getClientOriginalExtension() ;
            $filename = 'cover_image' . '_' . time() . '.' . $ext ;

            $file->storeAs('public/coverImages', $filename);

        }

        customer::create([

            $password  = strval($request->password),
            "fullname" => $request->fullname,
            "password" => Hash::make('password'),
            "email"    => $request->email,
            "phone"    => $request->phone,
            "Address"  => $request->Address,
            "NID"      => $request->NID,
            "image"    => $filename,
        ]);
         //return "done";
        return redirect("/user");
    }

    public function index()
    {
        $user=customer::all();
        return view("users.index", [
            "x" => $user
        ]);
    }

    public function show($id)
    {
        $x = customer::where("userid",$id)->get()->first();
        return view("users.show", [
            "user"=> $x
        ]);
    }

    public function admin()
    {
        $user=customer::all();
        return view("users.admin", [
            "x" => $user
        ]);
    }

    public function delete($id){
        $x = customer::where("userid", $id)->delete();
        return redirect("/admin");

    }

    public function edit($id)

    {

        $user = customer::where("userid", $id)->get()->first();
        return view("users.edit", [
            "user" => $user
        ]);
    }

    public function update(Request $request, $id)

    {

        $this->validateRequest($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = 'cover_image' . '_' . time() . '.' . $ext ;
            $file->storeAs('public/coverImages', $filename);

        }

        customer::where("userid", $id)->update([

            "fullname" => $request->fullname,
            "password" => $request->password,
            "email"    => $request->email,
            "phone"    => $request->phone,
            "Address"  => $request->Address,
            "NID"      => $request->NID,
            "image"    => $filename,

        ]);

        return redirect("/admin");

    }

}
