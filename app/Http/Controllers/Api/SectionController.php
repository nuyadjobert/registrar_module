<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'section_name' => 'required|string|unique:sections,section_name',
            'curriculum_id' => 'required|exists:curricula,id',
        ]);

        $section = Section::create($validated);

        return response()->json([
            'message' => 'Section created successfully',
            'section' => $section
        ], 201);
    }
}