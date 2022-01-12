<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\UsersModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Http\Request;
use App\Exports\ExportUser;
//use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

  


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $getUsers = UsersModels::all();
        $hitungUser = $getUsers->count();
        // dd($hitungUsers);
        return view('layout.user.index',compact('hitungUser','getUsers'));
    }


    public function updates($id)
    {
        
        $userId = UsersModels::findOrFail($id);
        return view('layout.user.edit',compact('userId'));
  
    }

    public function updatesProfile()
    {
        
        // = UsersModels::findOrFail($id);
        $userId = Auth::user();
        if($userId){
            // $cekKota = Jasas::where('city_id',Auth::user()->city_id)->first();
            $userId = UsersModels::where('id',$userId->id)->first();
           
        }else{
            $userId = null;
        }
        return view('layout.user.edit-profile',compact('userId'));
  
    }
       
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahuser()
    {
        //
        return view('layout.user.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */
    public function show(UsersModels $usersModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersModels $usersModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */

     
    public function update(Request $request,$id)
    {
        //
        $this->validate($request, [
          
            'name'     => 'required',
            
            'email' => 'required|email|unique:users',

        ]);

        //upload image
        $users = UsersModels::find($id);
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->level = $request->get('level');
        $users->password = Hash::make($request->get('password'));

        
      
        $users->save();


       
        if($users){
            //redirect dengan pesan sukses
            return redirect()->route('users')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('users')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }


    public function updateProfiles(Request $request,$id)
    {
        //

    
        $this->validate($request, [
          
            'name'     => 'required',
           
            'image'     => 'image|mimes:png,jpg,jpeg,svg',

        ],
        [
            'email.required' => 'The User Email must be a valid email address.'
        ]
    );

        //upload image
        $users = UsersModels::find($id);
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->level = $request->get('level');
        $users->password = Hash::make($request->get('password'));

        if ($request->hasFile('image')) {
            // $post->delete_image();
           
            if($request->file('image') == ""){
                $image = $request->file('image_old');
            }else{
                $image = $request->file('image');
            }
            // echo $photo_profile;exit;
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image', $name);
            $users->image = $name;
        }
        

        // if(!$users->name == "" | $users->email == "") {
        //     return redirect()->back()->with(['error' => 'Data Gagal Harus ada yang']);
        // }else{

        


        $users->save();


       
        if($users){
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UsersModels  $usersModels
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersModels $usersModels)
    {
        //
    }

     // PROSES TAMBAH DATA USer
     public function prosestambahuser(Request $request)
    {
         $this->validate($request, [
          
            'name'     => 'required',
            'email' => 'required'

        ]);

        //upload image
        $users = new UsersModels();
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->level = $request->get('level');
        $users->password = Hash::make($request->get('password'));

        
      
        $users->save();


       
        if($users){
            //redirect dengan pesan sukses
            return redirect()->route('users')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('users')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function hapusDataUser($id)
    {
        // echo $id; exit;
        $users = UsersModels::where('id',$id)->delete();

        if($users){
            //redirect dengan pesan sukses
            return redirect()->route('users')->with(['success' => 'Data Berhasil Di Hapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('users')->with(['error' => 'Data Gagal Di Hapus!']);
        }
    }

    public function exportUser(){
        return Excel::download(new ExportUser,'users.xlsx');
    }
}
