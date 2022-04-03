<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Item;

use App\Models\Booking;

class SearchController extends Controller
{
    public function index()
    {
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
        $filter = \Request::get('filter');

        $role = \Request::get('role');

        if($role == 'users'){

            if($filter == 'name'){
                 $users = User::where('name','like', "%{$search}%")->simplePaginate(100);
            }

            if($filter == 'email'){
                 $users = User::where('email', $search)->simplePaginate(100);
            }

            return view ('search.user')->with('users', $users)->with('search', $search);

        }

        if($role == 'items'){

            if($filter == 'item_name'){
                 $items = Item::where('name','like', "%{$search}%")->simplePaginate(100);
            }

            if($filter == 'ref_id'){
                 $items = Item::where('ref_id', $search)->simplePaginate(100);
            }

            return view ('search.items')->with('items', $items)->with('search', $search);

        }

        if($role == 'bookings'){

            if($filter == 'item_name'){
                 $bookings = Booking::where('item_name','like', "%{$search}%")->simplePaginate(100);
            }

            if($filter == 'user_name'){
                 $bookings = Booking::where('user_name', $search)->simplePaginate(100);
            }

            if($filter == 'ref_id'){
                 $bookings = Booking::where('ref_id', $search)->simplePaginate(100);
            }

            return view ('search.bookings')->with('bookings', $bookings)->with('search', $search);

        }
    
    }

}
