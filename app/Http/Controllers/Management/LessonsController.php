<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\EventStoreRequest;
use App\Models\CookingLesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $lessons = CookingLesson::where('user_id', $user->id)->get();
        return view('management.lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('management.lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventStoreRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }


        CookingLesson::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'score' => $request->score,
            'create_date'=> $request->create_date,
            'user_id' => Auth::id(),

        ]);

        return redirect()->route('management.lessons.index')->with('success', 'Lesson created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CookingLesson $lesson)
    {
        $user = Auth::user();

        if ($lesson->user_id !== $user->id) {
            abort(403); // Renvoie une réponse "Forbidden"
        }

        return view('management.lessons.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CookingLesson $lesson)
    {
        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'duration' => $request->input('duration'),
            'score' => $request->input('score'),
            'start_time' => $request->input('start_time'),
            'user_id' => $request->input('user_id'),
        ];



        $lesson->update($data);

        return redirect()->route('management.lessons.index')->with('warning', 'Rental updated successfully.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CookingLesson $lesson)
    {
        $imagePath = $lesson->image;

        if (Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }

        $lesson->delete();

        return redirect()->route('management.lessons.index')->with('danger', 'Lesson deleted successfully.');
    }
}
