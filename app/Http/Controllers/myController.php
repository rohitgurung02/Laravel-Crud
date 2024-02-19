<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class myController extends Controller
{
    public function create(){
        $users = Student::all();
        return view('index',['user'=>$users]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->save();
        return redirect()->route('showdata')->with('status','Record has been added');
    }

    public function showData()
    {
        $users = Student::all();
        return view('showdata',['user'=>$users]);
    }

    public function edit($id)
    {
        $users = Student::find($id);
        return view('edit',['user'=>$users]);
        
    }

    public function update(Request $request, $id)
    {
        $users = Student::find($id);
        $users->update($request->all());
        return redirect()->route('index')
      ->with('success', 'Record has been updated successfully.');
    }

    public function destroy($id)
     {
        $post = Student::find($id);
        $post->delete();
        return redirect()->route('showdata')
         ->with('success', 'Post deleted successfully');
        
  }
}
