@extends('master.layout')
@section('content')
<br>
<div>
  <table class="table" style="width:90%;margin-left:auto;margin-right:auto;">
  <thead class="thead-dark"; style="background-color:#000000">
    <tr>
      <th scope="col" style="color:white;">Booking ID</th>
      <th scope="col" style="color:white;">First</th>
      <th scope="col" style="color:white;">Last</th>
      <th scope="col" style="color:white;">Email</th>
      <th scope="col" style="color:white;">Phone Number</th>
      <th scope="col" style="color:white;">Nationality</th>
      <th scope="col" style="color:white;">Date</th>
      <th scope="col" style="color:white;">Adult</th>
      <th scope="col" style="color:white;">Children</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bookings as $booking)
    <tr>
      <td>{{ $booking->booking_id}}</td>
      <td>{{ $booking->first_name}}</td>
      <td>{{ $booking->last_name}}</td>
      <td>{{ $booking->email}}</td>
      <td>{{ $booking->phone_no}}</td>
      <td>{{ $booking->nationality}}</td>
      <td>{{ $booking->pickup_date}}</td>
      <td>{{ $booking->adult}}</td>
      <td>{{ $booking->children}}</td>
    </tr>
    @endforeach
    </tbody>
</table> 

@endsection