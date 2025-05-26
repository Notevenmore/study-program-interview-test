<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\StudyProgram;
use Illuminate\Http\Request;

class StudyProgramControllers extends Controller
{
  public function index() {
    $study_program = StudyProgram::with('faculty')->get();
    return view('index', [
      'study_programs' => $study_program
    ]);
  }

  public function create() {
    $faculty = Faculty::all();
    return view('create', [
      'faculties' => $faculty
    ]);
  }

  public function edit($id) {
    $study_program = StudyProgram::with('faculty')->where(['id' => $id])->get();
    // dd($study_program[0]->faculty->name);
    $faculty = Faculty::all();
    return view('update', [
      'study_program' => $study_program[0],
      'faculties' => $faculty
    ]);
  }
}
