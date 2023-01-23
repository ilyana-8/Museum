<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{

        /**
          * Display a listing of the resource.
          *
          * @return \Illuminate\Http\Response
          */
         public function index()
         {
             $booking = DB::table ('bookings')
             ->orderBy('first_name', 'asc')
             ->get();

             return view('booking', ['bookings'=>$bookings]);
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
          * @param \Illuminate\Http\Request $request
          * @return \Illuminate\Http\Response
          */
         public function store(Request $request)
         {
                 $booking= new Booking();
                 $booking->first_name=$request->first_name;
                 $booking->last_name=$request->last_name;
                 $booking->email=$request->email;
                 $booking->phone_no=$request->phone_no;
                 $booking->nationality=$request->nationality;
                 $booking->pickup_date=$request->pickup_date;
                 $booking->adult=$request->adult;
                 $booking->children=$request->children;
                 $booking->created_at=today();
                 $booking->updated_at=today();
                 $booking->save();
             return redirect('booking');

         }

         /**
          * Display the specified resource.
          *
          * @param int $id
          * @return Illuminate\Http\Response
          */
         public function show($id)
         {
             //
         }

         /**
          * Show the form for editing the specified resource.
          *
          * @param int $id
          * @return \Illuminate\Http\Response
          */
         public function edit($id)
         {
             //
         }

         /**
          * Update the specified resource in storage.
          *
          * @param \Illuminate\Http\Request $request
          * @param int $id
          * @return \Illuminate\Http\Response
          */
         public function update($id)
         {
             //
         }

         /**
          * Remove the specified resource from storage.
          *
          * @param int $id
          * @return \Illuminate\Http\Response
          */
         public function destroy($id)
         {
             //
         }
}
