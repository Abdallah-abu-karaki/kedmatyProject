<?php

namespace App\Http\Controllers;

use App\Http\Requests\addAdmainRequest;
use App\Item;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use MongoDB\Driver\Session;
use RealRashid\SweetAlert\Facades\Alert;

class admainController extends Controller
{

    /***************************start manage admain controller *************************/

   /*_______________________Open  manage admain page _________________________________*/
   public function manage_admain(){

        $admains = User::where('status',1)->paginate(4);

       return view('admin.manage_admain',compact('admains'));
   }
   /*_________________________________________________________________________________*/

    /*__________________________open add  admain page_________________________________*/
   public function add_admain(){

       return view('admin.add_admain');
   }
   /*_________________________________________________________________________________*/

   /*__________________________insert admain to database______________________________*/
   public function insert_admain(Request $request){

       User::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => Hash::make($request['password']),
           'status'=>1,
       ]);
       alert()->success('Admain Added', 'Successfully')->toToast();
       return redirect()->route('manage_admain');
   }
   /*_________________________________________________________________________________*/

   /*__________________________delete admain from database____________________________*/

   public function delete_admain($id){

       $admain = User::find($id);
       $delete_admain = $admain->delete();

       if( $delete_admain ){
        Alert::success('Delete Admain Successfully');
       }

       return redirect()->route('manage_admain');
   }
   /*_________________________________________________________________________________*/

   /*__________________________open edit admain page__________________________________*/
   public function edit_admain($id){
       $admain = User::find($id);
       return view('admin.edit_admain',compact('admain'));
   }
   /*_________________________________________________________________________________*/

    /*_________________________update admain info in database_________________________*/
   public function update_admain(Request $request ,$id){

       $admain = User::find($id);

       $doneUpdate = $admain->update([
           'name' => $request['name'],
           'email' => $request['email'],
       ]);

       if($doneUpdate){
            toast('edit successfully','success');

           return redirect()->route('manage_admain');
       }
   }
   /*_________________________________________________________________________________*/

    /***************************end manage admain controller *************************/

   /***************************start manage vendor controller *************************/


    public function manage_vendor(){
       /* $vendors = User::with('profile')->where('status',0)->get();*/
        $vendors = User::with(['profile'=>function($q){
            $q->select('location','number','image','user_id');
        }])->where('status',0)->get();


        return view('admin.manage_vendor',compact('vendors'));
    }

    public function delete_vendor($id){
        $vendor = User::find($id);
        $vendor->delete();
        toast('Delete vendor successfully :) ','success');
        return redirect()->route('manage_vendor');
    }




    /**************************end manage vendor controller **************************/

    /**************************start manage item controller **************************/
    public function manage_item(){
        $items = User::with(['profile'])->where('status',0)->get();

        return view('admin.manage_item',compact('items'));
    }

    public function show_item_vendor($id){

        $items = Item::where('user_id',$id)->paginate(5);

        return view('admin.show_item_vendor',compact('items'));
    }
    /**************************end manage item controller **************************/

}
