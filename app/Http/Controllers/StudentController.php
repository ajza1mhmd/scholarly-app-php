<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return View('students.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return View('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return Redirect('students')->with('flash_message','Student Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $students = Student::find($id);
        return view('students.show')->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $students = Student::find($id);
        return view('students.edit')->with('students', $students);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $students = Student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('students')->with('flash_message', 'student Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!'); 
    }
}
