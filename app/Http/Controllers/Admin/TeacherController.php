<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function getDataTeacher(Request $request)
    {
        $teacher = Teacher::where('id', $request->teacher)->first();

        $json['success'] = true;
        $json['teacher'] = $teacher;

        if (!$teacher) {
            $json['success'] = false;
        }
        return response()->json($json);
    }
}
