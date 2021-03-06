<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Util\StatusCodes;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the student.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['students' => Student::all()]);
    }

    /**
     * Store a newly created student in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make(
            $request->all(),
            [
             'name'          => 'required|max:255',
             'student_code'  => 'required|max:8|unique:students',
             'date_of_birth' => 'sometimes|date',
             'starting_date' => 'sometimes|date',
             'gender'        => 'sometimes|max:10',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), StatusCodes::UNPROCESSABLE_ENTITY);
        }

        $student = Student::create($request->all());

        return response()->json($student, StatusCodes::CREATED);
    }

    /**
     * Display the specified student.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Student::findOrFail($id));
    }

    /**
     * Update the specified student in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make(
            $request->all(),
            [
             'name'          => 'sometimes|max:255',
             'student_code'  => 'sometimes|max:8|unique:students',
             'date_of_birth' => 'sometimes|date',
             'starting_date' => 'sometimes|date',
             'gender'        => 'sometimes|max:10',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->messages(), StatusCodes::UNPROCESSABLE_ENTITY);
        }

        $student = Student::findOrFail($id);

        if ($request->name != null) {
            $student->name = $request->name;
        }
        if ($request->student_code != null) {
            $student->student_code = $request->student_code;
        }
        if ($request->date_of_birth != null) {
            $student->date_of_birth = $request->date_of_birth;
        }
        if ($request->starting_date != null) {
            $student->starting_date = $request->starting_date;
        }
        if ($request->gender != null) {
            $student->gender = $request->gender;
        }
        $student->save();

        return response()->json($student);
    }

    /**
     * Remove the specified student from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);

        return response()->json([], StatusCodes::NO_CONTENT);
    }
}
