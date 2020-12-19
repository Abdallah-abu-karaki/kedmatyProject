<?php

namespace App\Http\Controllers;

use App\Item;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function check()
    {

        $user = Auth::user()->status;

        if($user == 1){
           $number_item             = Item::all()->count();
           $number_admain           = User::where('status',1)->get()->count();
           $number_vendors          = User::where('status',0)->get()->count();
           $latest_admain_added     = User::with('profile')->where('status',1)->orderBy('id', 'desc')->take(4)->get();

           $latest_vendors_register = User::with(['profile'])->where('status',0)->orderBy('id', 'desc')->take(4)->get();

            return view('admin.index',compact(['number_item','number_admain','number_vendors','latest_admain_added','latest_vendors_register']));
        }else{

            $profile = User::with(['Profile'=>function($q){
                $q->select('complete_profile','user_id');
            }])->find(Auth::id());

            $item = Item::where('user_id',Auth::id())->paginate(4);
            $number_item_add = Item::where('user_id',Auth::id())->count();
            $number_item_out_of_stock = 0;
            foreach($item as $item_finish){
                if($item_finish->count == 0){
                    $number_item_out_of_stock +=1;
                }
            }

            return view('vendors.index',compact(['profile','item','number_item_add','number_item_out_of_stock']));
        }


    }

    public function contact(){
        return view('userSide.contact');
    }
    public function home_user(){
        return view('welcome');
    }
    public function about_as(){
        return view('userSide.aboutAs');
    }












}
