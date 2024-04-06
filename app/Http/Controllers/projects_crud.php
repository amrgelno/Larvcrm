<?php

namespace App\Http\Controllers;
use App\Models\projects ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;


class projects_crud extends Controller
{


// public function __construct(){

//     $this->middleware('auth');
// }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        echo'Right Route';
    }

  /**
     * Store a newly created resource in storage.
     * @param  \App\Models\projects 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        

    

    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\projects 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 USE UploadImg;   //  use Traits

    public function store(Request $request)
    {    
        

         @$title=$request->title;
        @$Description=$request->Description;
        @$Deadline=$request->Deadline;
        @$Assigneduser=$request->Assigneduser;
        @$Assignedclient=$request->Assignedclient;
        @$status=$request->status;
      
        
        projects::create([
          
    'title'=>$title,
    'Description'=> $Description,
    'Deadline'=> $Deadline,
    'Assigneduser'=> $Assigneduser,
    'Assignedclient'=> $Assignedclient,
    'status' =>  $status
                        
                      ]);
      
                      echo  "<script>   alert('Data send success'); </script>";
      
      return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');       
            
            
            
            
            
            
       

            }



    /**
     * Display the specified resource.
     * @param  int  $id
     * @param  \App\Models\projects 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,projects $projectsitem)
    {

       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        



    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request,projects $projectsitem)
    {

        @$title=$request->title;
        @$Description=$request->Description;
        @$Deadline=$request->Deadline;
        @$Assigneduser=$request->Assigneduser;
        @$Assignedclient=$request->Assignedclient;
        @$status=$request->status;
        @$projects_id=$request->projects_id;

      
        
        projects::where('id',$projects_id)->update([
          
    'title'=>$title,
    'Description'=> $Description,
    'Deadline'=> $Deadline,
    'Assigneduser'=> $Assigneduser,
    'Assignedclient'=> $Assignedclient,
    'status' => $status
                        
                      ]);
      
                      echo  "<script>   alert('Data send success'); </script>";
      
      return redirect()->route('Admin.Login.post')->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param  
     * @param  \App\Models\projects 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,projects $projectsitem)
    {

        $projects_id=$request->projects_id;

        projects::where('id',$projects_id)->Delete();

 return redirect()->route('Admin.Login.post')->with('success','update  sent  succefuly');

    }
/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\projects
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,projects $projectsitem)
    {



    }




}
