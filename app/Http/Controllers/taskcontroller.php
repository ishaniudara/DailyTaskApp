<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class taskcontroller extends Controller
{
    public function store(Request $request){
        $task=new Task();
        $this->validate($request,['task'=>'required|max:100|min:5',]);
        $task->task=$request->task;
        $task->save();
        $data=Task::all();
        return view('task')->with('tasks',$data);
      
      
    }
    public function updatetask($id){
        $task=Task::find($id);
        $task->Iscompleted=1;
        $task->save();
        return redirect()->back();
    }
    public function updatenottask($id){
        $task=Task::find($id);
        $task->Iscompleted=0;
        $task->save();
        return redirect()->back();

    }
    public function deletetask($id){
        $task=Task::find($id);
      
        $task->delete();
        return redirect()->back();

    }
    public function utask($id){
        $task=Task::find($id);
        return view('updatatask')->with('taskdata',$task);
    }
    public function updateupdate(Request $request){
        $id=$request->id;
        $task=$request->task;
        $task=Task::find($id);
        $data->task=$task;
        $data->save();
        $datas=Task::all();
        return view('task')->with('tasks',$datas);
    }
}
