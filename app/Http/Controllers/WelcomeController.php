<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use App\Models\Booking;

use Carbon\Carbon;

class WelcomeController extends Controller
{
    public function welcome()
    {   
        $items = Item::orderBy('created_at', 'desc')->limit(10)->get();

        return view('welcome', compact('items') );
    }

    public function items()
    {   
        $items = Item::orderBy('created_at', 'desc')->simplePaginate(12);

        return view('item.index', compact('items') );
    }

    public function payment()
    {   
        $slug = \Request::get('slug');

        $item = Item::where('slug', $slug)->first();

        return view('item.payment', compact('item') );
    }

    public function item_page()
    {   
        $slug = \Request::get('slug');

        $item = Item::where('slug', $slug)->first();

        return view('item.item_page', compact('item') );
    }

    public function thank_you()
    {
        return view('item.thank_you');
    }

    public function about()
    {
        return view('page.about');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function search_item()
    {   
        $search = \Request::get('search');

        $items = Item::where('name','like', "%{$search}%")->simplePaginate();

        return view('item.search_item', compact('items', 'search'));
    }

    public function post_booking(Request $request){

        $item = Item::where('ref_id', $request->input('item_ref_id') )->first();

        $booking = new Booking;

        $booking->user_name = $request->input('name');

        $booking->email = $request->input('email');

        $booking->address = $request->input('address');

        $booking->item_name = $item->name;

        $booking->item_ref_id = $request->input('item_ref_id');

        $booking->booking_date =Carbon::now();

        $booking->return_date = Carbon::now()->addDays($request->input('days'));

        $booking->amount = $request->input('days') * $item->rate;

        $booking->ref_id = 'bk-'.time();

        $booking->save();

        return redirect('/payment/thank-you');

    }
}
