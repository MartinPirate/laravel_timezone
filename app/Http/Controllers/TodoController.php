<?php

namespace App\Http\Controllers;

use App\Models\r;
use App\Models\Todo;
use Illuminate\Http\Request;
use Inertia\Inertia;
use JamesMills\LaravelTimezone\Timezone;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('completed')->get();

        $res = [];

         foreach ($todos as $todo) {
            $res[] =
                 [
                     "id" => $todo->id,
                     "title" => $todo->title,
                     "deadline" => (new Timezone)->convertToLocal($todo->deadline) ,
                     "description" => $todo->description,
                 ];
         }
        return Inertia::render('Dashboard/Index', ['todos' => $res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {

        return Inertia::render('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $postData = $this->validate($request, [
            'title' => 'required',
            'deadline' => 'required',
            'description' => 'required',
        ]);

        Todo::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @return \Inertia\Response
     */
    public function show(Todo $todo)
    {
        //        dd($todo);
        return Inertia::render('show', ['tasks' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\r $r
     * @return \Inertia\Response
     */
    public function edit(Todo $todo)
    {
        return Inertia::render('edit', ['edits' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\r $r
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        Todo::where('id', $request->id)->update([
            'title' => $request->title,
            'deadline' => $request->deadline,
            'description' => $request->description
        ]);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\r $r
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(r $r, Todo $todo)
    {
        $todo->delete();
        return redirect()->route('home');
    }

    public function toggle(Todo $todo)
    {
        $val = $todo->completed;
        //        dd($val);
        if ($val == 1) {
            $todo->update(['completed' => false]);
        } else {
            $todo->update(['completed' => true]);
        }
        return redirect()->route('home');
    }
}
