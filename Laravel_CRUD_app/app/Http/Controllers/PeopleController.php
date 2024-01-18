<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{ 
    public function create(Request $request){
        $newPeople = New People();
        $newPeople->name=$request->name;
        $newPeople->surname=$request->surname;
        $newPeople->email=$request->email;
        $newPeople->phoneNumber=$request->phoneNumber;
        $newPeople->city=$request->city;
        $newPeople->address=$request->address;
        $newPeople->country=$request->country;
        $newPeople->save();
        return response()->json("Object People created succesfully");
    }

    
    public function read(Request $request){
        $people=People::findorfail($request->id);
        return response()->json($people);
    }


    public function update(Request $request){
        $newPeople=People::findorfail($request->id);
        foreach ($request->all() as $key => $value) {
            if (!is_null($value)) {
                $newPeople->$key = $value;
            }
        }

        $newPeople->update();
        return response()->json("Object People updated succesfully");
    
    }

    public function delete(Request $request){
        $people=People::findorfail($request->id)->delete();
        return response()->json("Object People deleted succesfully");
    }

    public function read_all(){
        $peoples = People::all();
        return response()->json([$peoples]);
    }
}
