<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Helpers\Helper;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = \DB::table ('bookings')->get();

             return view('booking', ['bookings'=>$bookings]);
            
             
             
        
    }

    public function bookd()
    {$bookings = \DB::table ('bookings')->get();
            
        return view('bookingDetail', ['bookings'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking= new Booking();
                 $booking->booking_id=Helper::IDGenerator(new Booking, 'booking_id', 5, 'NSB'); 
                 $booking->first_name=$request->first_name;
                 $booking->last_name=$request->last_name;
                 $booking->email=$request->email;
                 $booking->phone_no=$request->phone_no;
                 $booking->nationality=$request->input('nationality');
                 $booking->pickup_date=$request->input('pickup_date');
                 $booking->adult=$request->input('adult');
                 $booking->children=$request->input('children');
                 $booking->created_at=today();
                 $booking->updated_at=today();
                 $booking->save();
             return redirect('booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
