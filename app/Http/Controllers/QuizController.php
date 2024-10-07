<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new quiz
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $title = $request->input('title');
        Quiz::create($request->all());

        return redirect()->route('dashboard')->with('success', "Quiz $title created successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        return view('quiz.show', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // TODO
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // TODO
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        // Find the quiz by its ID
        $quiz = Quiz::find($quiz->id);

        // Validate if the quiz exists
        if (!$quiz) {
            return redirect()->route('dashboard')->with('error', 'Quiz not found.');
        }

        $quiz->delete();

        return redirect()->route('dashboard')->with('success', "Quiz $quiz->title deleted successfully!");
    }
}
