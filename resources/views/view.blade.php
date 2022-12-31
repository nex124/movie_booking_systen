@extends('master')
@section('top')
<center>
<h2>MANAGE BOOKING<H2>
@endsection

@section('filters')
<div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filter Bookings
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/view/spiderman">Spiderman</a>
    <a class="dropdown-item" href="/view/encanto">Encanto</a>
    <a class="dropdown-item" href="/view/kings">The Kings's Man</a>
    <a class="dropdown-item" href="/view/venom">Venom 2</a>
    <a class="dropdown-item" href="/view/kungfu">New Kung Fu Cult Master 1</a>
    <a class="dropdown-item" href="/view/nightmare">Nightmare Alley</a>   
    <a class="dropdown-item" href="/view/notime">No Time To Die</a>
    <a class="dropdown-item" href="/view">Remove Filters</a>
</div>
@endsection
@section('history')

<table class="table table-bordered" style="width: 1500px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Movie_title</th>
      <th scope="col">Date</th>
      <th scope="col">Time_slot</th>
      <th scope="col">Seat_no</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Delete Booking</th>
    </tr>
  </thead>
  
  @foreach($mydata as $movie3)
  <tbody>
    <tr>  
      <td>{{$movie3->movie_name}}</td>
      <td>{{$movie3->time_slot}}</td>
      <td>{{$movie3->date}}</td>
      <td>{{$movie3->seat_no}}</td>
      <td>{{$movie3->contact}}</td>
      <td><a href="/page2/{{$movie3->ticket_ID}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete</a></td>
    </tr>
   @endforeach 
  </tbody>
</table>
@endsection

