<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Item;

use App\Models\Booking;

use Illuminate\Support\Str;

class PageController extends Controller
{   
    public function __construct()
    {   
        $this->middleware(['auth'] );
    }


    public function admin()
    {   
        $all_user_count = User::count();

        $all_item_count = Item::count();

        $all_booking_count = Booking::count();

        $total_revenue = Booking::sum('amount');

        $items = Item::orderBy('created_at', 'desc')->limit(10)->get();

        $bookings = Booking::orderBy('created_at', 'desc')->limit(10)->get();

        $users = User::orderBy('created_at', 'desc')->limit(10)->get();

        return view('page.admin', compact('all_user_count', 'all_item_count', 'all_booking_count', 'total_revenue', 'items', 'bookings', 'users' ) );
    }

    public function admin_users(){

        $all_user_count = User::count();

        $users = User::orderBy('created_at', 'desc')->simplePaginate(10);

        return view('page.users', compact('all_user_count', 'users' ) );
    
    }

    public function admin_items(){

        $all_item_count = Item::count();

        $items = Item::orderBy('created_at', 'desc')->simplePaginate(10);

        return view('page.admin_items', compact('all_item_count', 'items') );
    
    }

    public function admin_items_new(){

        return view('page.admin_items_new');
    
    }

    public function admin_bookings(){

        $all_booking_count = Booking::count();

        $total_revenue = Booking::sum('amount');

        $bookings = Booking::orderBy('created_at', 'desc')->simplePaginate(10);

        return view('page.admin_bookings', compact('all_booking_count', 'total_revenue', 'bookings') );
    
    }

    public function post_item(Request $request){

        $item = new Item;

        $item->name = $request->input('name');

        $item->slug = Str::slug( strtolower($item->name) );

        $item->description = $request->input('description');

        $item->availability = $request->input('availability');

        $item->rate = $request->input('rate');

        $image = $request->file('file');
        $filename = $image->getClientOriginalName();
        $destinationPath = 'assets/item/'.$item->slug.'/';
        $upload_image = $image->move($destinationPath, $filename);

        $item->img = $filename;
        
        $item->ref_id = time();

        $item->save();

        toastr()->success('New Item added.');

        return redirect('/admin/items');

    }

}
