<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Author::all();
        return response()->json([
            "Data Berhasil Muncul",
            $data
        ], 200);
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
        $data = Author::create([
            "name" => $request->name,
            "date_of_birth" => $request->date_of_birth,
            "place_of_birth" => $request->place_of_birth,
            "gender" => $request->gender,
            "email" => $request->email,
            "hp" => $request->hp
        ]);
        
        return response()->json([
            "Data Berhasil Ditambah",
            $data
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Author::find($id);
        if ($data){
            return response()->json(["Data Tertampilkan", $data], 200);
        }else{
            return ["message" => "Data not found"];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Author::find($id);
        if($data){
            $data->name = $request->name ? $request->name : $data->name;
            $data->date_of_birth = $request->date_of_birth ? $request->date_of_birth : $data->date_of_birth;
            $data->place_of_birth = $request->place_of_birth ? $request->place_of_birth : $data->place_of_birth;
            $data->gender = $request->gender ? $request->gender : $data->gender;
            $data->email = $request->email ? $request->email : $data->email;
            $data->hp = $request->hp ? $request->hp : $data->hp;
            $data->save();

            return response()->json(["Data Berhasil Diubah", $data], 200);
        }else{
            return ["message" => "Data not found"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Author::find($id);
        if($data){
            $data->delete();
            return response()->json(["Data Berhasil Dihapus", $data], 200);
        }else{
            return ["message" => "Data not found"];
        }
    }
}
