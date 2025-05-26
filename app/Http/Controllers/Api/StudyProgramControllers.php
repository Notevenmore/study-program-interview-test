<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudyProgramControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $validate = $request->validate()
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'name' => 'required|string|unique:study_programs,name|regex:/^[a-zA-Z\s]+$/',
        'code' => 'required|string|unique:study_programs,code',
        'faculty' => 'required'
      ]);

      $explode_name = explode(' ', $validatedData['name']);
      $short_name = '';
      foreach ($explode_name as $name) {
          $short_name .= strtoupper($name[0]);
      }

      if(count($explode_name) == 1) {
        $short_name .= $short_name;
      }

      StudyProgram::create([
        'name' => $validatedData['name'],
        'code' => $validatedData['code'],
        'short_name' => $short_name,
        'faculty_id' => (int) ($validatedData['faculty'])
      ]);

      return response()->json([
        'message' => "Program Studi berhasil terdata",
        (int) ($validatedData['faculty'])
      ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $validatedData = $request->validate([
        'name' => ['required','string','regex:/^[a-zA-Z\s]+$/', Rule::unique('study_programs', 'name')->ignore($id)],
        'code' => ['required','string', Rule::unique('study_programs', 'code')->ignore($id)],
        'faculty' => 'required'
      ]);

      $explode_name = explode(' ', $validatedData['name']);
      $short_name = '';
      foreach ($explode_name as $name) {
          $short_name .= strtoupper($name[0]);
      }

      StudyProgram::where(['id' => $id])->update([
        'name' => $validatedData['name'],
        'code' => $validatedData['code'],
        'short_name' => $short_name,
        'faculty_id' => (int) ($validatedData['faculty'])
      ]);

      return response()->json([
        'message' => "Program Studi berhasil terupdate",
        (int) ($validatedData['faculty'])
      ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      StudyProgram::destroy($id);
      return response()->json(['message'=>'Program studi berhasil dihapus'], 201);
    }
}
