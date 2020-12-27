<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function validForm(Request $request){
        
       
        
        $request->validate([
                'national_id' => 'required|numeric|digits:10',
                'fullname'    => array ('required','regex:/^([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+$/'),
                'email'       => 'required|email',
                'mobile'      => 'required',
                'address'     => 'required',
                'password'     => 'required',
               
        ]);

        /* $input= $request->input(); */
           
        




    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainees = User::all();
        return view('LP3.index',compact('trainees')); 
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('LP3.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $this->validForm($request);
        if($request ->hasFile('userimg')){
        //save photo in to folder
        $file_exetension=$request->userimg ->getClientOriginalExtension();
        $file_name=time().".".$file_exetension;
        $path='images';
        $request->userimg ->move($path,$file_name);
        }else{
            $file_name="default.png";
        }
       // insert in to database 
       $user=new User;
       $user->national_id = $request->input('national_id');
       $user->fullname = $request->input('fullname');
       $user->email = $request->input('email');
       $user->mobile = $request->input('mobile');
       $user->address = $request->input('address');
       $user->password = $request->input('password');
       $user->userimg= $file_name;
       $user->save();
       return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $trainee =User::where("id",$id)->get()->first();
        return $trainee;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        $this->validForm($request);
        //save photo in to folder
        if($request->hasFile('userimg')){
        $file_exetension=$request->userimg ->getClientOriginalExtension();
        $file_name=time().".".$file_exetension;
        $path='images';
        $request->userimg ->move($path,$file_name);}
        else{
            $file_name = User::find($id)->userimg;

            }

            User::where("id",$id)->update([
            'national_id' => $request->input('national_id'),
            'fullname'    => $request->input('fullname'),
            'email'       => $request->input('email'),
            'mobile'      => $request->input('mobile'),
            'address'     => $request->input('address'),
            'userimg'     => $file_name ,
            'password'    =>$request->input('password')

            ]) ;
            
        
            return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
       
        return redirect('/dashboard');
    }

    public function create1( $id)
    {
        $trainee=$this->show($id);
        return view('LP3.user_profile',compact('trainee'));
    }


   public function create2(){
    $trainees = User::all();
    return view('LP3.dashboard',compact('trainees')); 
     

   }
   public function create3($id){
    $trainee=$this->show($id);
    return view('LP3.edit',compact('trainee')); 
     

   }






}
