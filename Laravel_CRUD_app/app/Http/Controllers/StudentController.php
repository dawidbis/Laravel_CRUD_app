<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Swoole\Http\Response;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->phoneNumber = $request->phoneNumber;
        $student->city = $request->city;
        $student->address = $request->address;
        $student->country = $request->country;
        $student->scholarship = $request->scholarship;

        $student->save();

        return response()->json('Student added to database successfully!');
    }

    public function read(Request $request, string $id)
    {
        $student = Student::findorfail($request->id);

        return response()->json($student);
    }

    public function read_ALL()
    {
        $student = Student::all();

        return response()->json($student);
    }

    public function update(Request $request)
    {
        $student = Student::findorfail($request->id);
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->phoneNumber = $request->phoneNumber;
        $student->city = $request->city;
        $student->address = $request->address;
        $student->country = $request->country;
        $student->scholarship = $request->scholarship;

        $student->update();

        return response()->json('Student updated successfully!');
    }

    public function delete(Request $request)
    {
        $student = Student::findorfail($request->id)->delete();

        return response()->json('Student deleted successfully!');
    }
}
