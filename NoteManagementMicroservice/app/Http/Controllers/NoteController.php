<?php

namespace App\Http\Controllers;

use App\Jobs\NoteCreated;
use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NoteController extends Controller
{
    protected Model $model;

    public function __construct(Note $model)
    {
        $this->model = $model;
    }

    public function store(Request $request){
//        $requestData = $request->only('title', 'content');

//        $user_id = Session::get('note_user_id');
//        dd($user_id);
//        $requestData['user_id'] = $user_id;
//        $note=$this->model->create($requestData);
        $note=$this->model->create($request);

        return response()->json([
            'data'=>$note,
            'message'=>'Note is added successfully. :)'
        ]);
    }
    public function update(Note $note){


        $note->update(request()->all());
        return response()->json([
            'data'=>$note,
            'message'=>'Note is updated successfully. '
        ]);
    }
    public function destroy(Note $note){
        $note->delete();
        return response()->json([
            'message'=>'Note is deleted successfully. :('
        ]);
    }
    public function show(Note $note){
        return response()->json([
            'data'=>$note
        ]);
    }
    public function index(){
        $user_id = request()->query('user_id');

        $notes = $this->model->where('user_id', $user_id)->get();

        return response()->json([
            'data'=> $notes
        ]);
    }
}
