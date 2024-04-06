<?php

namespace App\Http\Controllers;
use App\Models\client ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;


class client_crud extends Controller
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
     * @param  App\Http\UploadImg;
     * @param  \App\Models\client 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    public function create(Request $request)
    {
        

 

    
    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\client 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 USE UploadImg;   //  use Traits

    public function store(Request $request)
    {    
        
       @$username=$request->CLientname;
        @$email=$request->CLientemail;
        @$phone=$request->CLientphone;
        @$FILENAME= $this -> saveImage($request ->upload,'Front/IMG/');
       
$client=client::where('email',$email)->get();

$countclient=count($client);




//dd ($countclient);

if($countclient == 0){


  client::create([
          
    'username'=>$username,
    'email'=> $email,
    'phone'=>$phone,
    'image'=> $FILENAME,
                  
                ]);

echo  "<script>   alert('Data send success'); </script>";

        
                    }else{

                      echo  "<script>   alert('error duplicated  value email'); </script>";


                    }
    
                    
                    return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');
       

            }



    /**
     * Display the specified resource.
     * @param  int  $id
     * @param  \App\Models\client 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,client $clientitem)
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
     * @param  \App\Models\client 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request,client $clientitem)
    {

        @$username=$request->CLientname;
        @$email=$request->CLientemail;
        @$CLientphone=$request->CLientphone;
        @$FILENAME= $this -> saveImage($request -> upload ,'Front/IMG/');

      
        
        client::where('id',$request->client)->update([
          
          'username'=>$username,
          'email'=> $email,
          'phone'=>$CLientphone,
          'image'=> $FILENAME,
                        
                      ]);
      
                      echo  "<script>   alert('Data send success'); </script>";
      
      return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');
                    

    }

    /**
     * Remove the specified resource from storage.
     * @param  
     * @param  \App\Models\client 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,client $clientitem)
    {


 client::where('ID',$request->client)->Delete();

 return redirect()->route('Admin.Login.post')->with('success','update  sent  succefuly');

    }
/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\client
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,client $clientitem)
    {




    }




}
