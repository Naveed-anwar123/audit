<?php

namespace Survey\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Survey\Models\Audit;


class SurveyController extends Controller{

    public function index(){
       // dd( ['hello' => 'This is audit route'] );
        $audits = Audit::all();
       return view('survey::survey-index',compact('audits'));

    }

    public function add(){
        // dd( ['hello' => 'This is audit route'] );
        return view('survey::survey-add');

    }

    public function store(\Illuminate\Http\Request $request){
        // dd( ['hello' => 'This is audit route'] );
       // return view('survey::survey-add');


        $valid = $this->validate($request,[
           'name' => 'required|min:3'
        ]);

        $publised = false;

        if($request->has('published')){
            $publised = true;
        }
        if($valid) {
          //  dd($request->all());
         Audit::create([
                'name' => $request->input('name'),
                'user_id' => 1,
                'is_published' => $publised,
                'is_archieved' => 1,
                'checklist_id' => 1
            ]);

            return redirect()->route('survey-add')->with(['success'=>'Audit information added successfully.']);
        }
        else{
                return redirect()->route('survey-add')->withErrors();
        }
    }





}
