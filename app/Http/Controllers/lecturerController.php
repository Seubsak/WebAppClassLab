<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

class lecturerController extends Controller
{
    public function index(){
        $teachers = Lecturer::all();
        return view("lecturer",['teachers'=>$teachers]);
    }
    public function insert(Request $request){
        $new_teachers = new Lecturer;
        $new_teachers->lec_name = $request->name;
        $new_teachers->email = $request->email;
        $new_teachers->major = $request->major;
        $new_teachers->save();
        $teachers = Lecturer::all();
        return redirect('/lecturers');
    }
    public function delete($lec_id)
{
    $lecturer = Lecturer::find($lec_id);

    if (!$lecturer) {
        return redirect('/lecturers')->with('error', 'Lecturer not found.');
    }

    return view('layouts.delete', compact('lecturer'));
}

public function destroy($lec_id)
{
    $lecturer = Lecturer::find($lec_id);

    if (!$lecturer) {
        return redirect('/lecturers')->with('error', 'Lecturer not found.');
    }

    $lecturer->delete();

    return redirect('/lecturers')->with('success', 'Lecturer deleted successfully.');
}
public function editForm($lec_id){
    $edit_lec = Lecturer::where('id',$lec_id)->get();
    $teachers = Lecturer::all();
    return view('editFormLecturer',compact('edit_lec','teachers'));
}
public function update(Request $request){
    $edit_teacher = Lecturer::find($request->id);
    $edit_teacher->lec_name = $request->name;
    $edit_teacher->email = $request->email;
    $edit_teacher->major = $request->major;
    $edit_teacher->save();
    return redirect('/lecturers');

}
}
