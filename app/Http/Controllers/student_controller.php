<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    // Certificate of Registration (COR)
    public function cor($id)
    {
        $student = Student::with(['enrollments.course'])->findOrFail($id);

        return response()->json([
            'student' => $student,
            'cor' => $student->cor() // returns enrolled courses
        ]);
    }

    // Transcript of Records
    public function transcript($id)
    {
        $student = Student::with(['enrollments.course'])->findOrFail($id);

        return response()->json([
            'student' => $student,
            'transcript' => $student->transcript() // can later include grades
        ]);
    }
}