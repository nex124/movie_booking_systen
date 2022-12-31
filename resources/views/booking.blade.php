@extends('master')
@section('table2')
<center>
<h1>MOVIE SEATING LAYOUT</h1>
<center>
<table class="table table-dark" style="width: 1200px;">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><center>Movie Screen</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
</table>
<center>
<table class="table table-dark table-bordered"  style="width: 1500px;">
  <thead>
    <tr>
      <th scope="col">A1</th>
      <th scope="col">A2</th>
      <th scope="col">A3</th>
      <th scope="col">A4</th>
      <th scope="col">A5</th>
      <th scope="col">A6</th>
      <th scope="col">A7</th>
      <th scope="col">A8</th>      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="col">B1</th>
      <th scope="col">B2</th>
      <th scope="col">B3</th>
      <th scope="col">B4</th>
      <th scope="col">B5</th>
      <th scope="col">B6</th>
      <th scope="col">B7</th>
      <th scope="col">B8</th>
    </tr>
    <tr>
      <th scope="col">C1</th>
      <th scope="col">C2</th>
      <th scope="col">C3</th>
      <th scope="col">C4</th>
      <th scope="col">C5</th>
      <th scope="col">C6</th>
      <th scope="col">C7</th>
      <th scope="col">C8</th>
    </tr>
    <tr>
      <th scope="col">D1</th>
      <th scope="col">D2</th>
      <th scope="col">D3</th>
      <th scope="col">D4</th>
      <th scope="col">D5</th>
      <th scope="col">D6</th>
      <th scope="col">D7</th>
      <th scope="col">D8</th>
    </tr>
    <tr>
      <th scope="col">E1</th>
      <th scope="col">E2</th>
      <th scope="col">E3</th>
      <th scope="col">E4</th>
      <th scope="col">E5</th>
      <th scope="col">E6</th>
      <th scope="col">E7</th>
      <th scope="col">E8</th>
    </tr>
    <tr>
      <th scope="col">F1</th>
      <th scope="col">F2</th>
      <th scope="col">F3</th>
      <th scope="col">F4</th>
      <th scope="col">F5</th>
      <th scope="col">F6</th>
      <th scope="col">F7</th>
      <th scope="col">F8</th>
    </tr>
    <tr>
      <th scope="col">G1</th>
      <th scope="col">G2</th>
      <th scope="col">G3</th>
      <th scope="col">G4</th>
      <th scope="col">G5</th>
      <th scope="col">G6</th>
      <th scope="col">G7</th>
      <th scope="col">G8</th>
    </tr>
    <tr>
      <th scope="col">H1</th>
      <th scope="col">H2</th>
      <th scope="col">H3</th>
      <th scope="col">H4</th>
      <th scope="col">H5</th>
      <th scope="col">H6</th>
      <th scope="col">H7</th>
      <th scope="col">H8</th>
    </tr>
  </tbody>
</table>
@endsection

@section('form')
<hr>
<h3>BOOKING FORM</h4>
<div class="container">

<form action="/page2/checkout" method="POST">
   {{csrf_field()}} 
  <div class="form-group">
  </div>
  <label for="exampleFormControlSelect1">Select a Movie</label>
    <select class="form-control" id="exampleFormControlSelect1" name="movie_name">
      <option>Spiderman No Way Home</option>
      <option>Encanto</option>
      <option>The Kings Man</option>
      <option>Venom 2</option>
      <option>New Kung Fu Cult Master 1</option>
      <option>Nightmare Alley</option>
      <option>No Time To Die</option>
    </select>
  </div>
  <br>
  <label for="date">Date for movie:</label>
  <input type="date" id="date" name="date" class="form-control-sm h-75 d-inline-block">
  <div class="form-group">
    <br>
    <label for="exampleFormControlSelect1">Select Time Slot</label>
    <select class="form-control form-control-lg w-50 p-3 h-75 d-inline-block" id="exampleFormControlSelect1" name="time_slot">
      <option>10:00am</option>
      <option>12:00pm</option>
      <option>2:00pm</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Selects only one Seat:</label>
    <select multiple class="form-control form-control-lg w-50 p-3" id="exampleFormControlSelect2" name="seat_no">
      <option>A1</option>
      <option>A2</option>
      <option>A3</option>
      <option>A4</option>
      <option>A5</option>
      <option>A6</option>
      <option>A7</option>
      <option>A8</option>
      <option>B1</option>
      <option>B2</option>
      <option>B3</option>
      <option>B4</option>
      <option>B5</option>
      <option>B6</option>
      <option>B7</option>
      <option>B8</option>
      <option>C1</option>
      <option>C2</option>
      <option>C3</option>
      <option>C4</option>
      <option>C5</option>
      <option>C6</option>
      <option>C7</option>
      <option>C8</option>
      <option>D1</option>
      <option>D2</option>
      <option>D3</option>
      <option>D4</option>
      <option>D5</option>
      <option>D6</option>
      <option>D7</option>
      <option>D8</option>
      <option>E1</option>
      <option>E2</option>
      <option>E3</option>
      <option>E4</option>
      <option>E5</option>
      <option>E6</option>
      <option>E7</option>
      <option>E8</option>
      <option>F1</option>
      <option>F2</option>
      <option>F3</option>
      <option>F4</option>
      <option>F5</option>
      <option>F6</option>
      <option>F7</option>
      <option>F8</option>
      <option>G1</option>
      <option>G2</option>
      <option>G3</option>
      <option>G4</option>
      <option>G5</option>
      <option>G6</option>
      <option>G7</option>
      <option>G8</option>
      <option>H1</option>
      <option>H2</option>
      <option>H3</option>
      <option>H4</option>
      <option>H5</option>
      <option>H6</option>
      <option>H7</option>
      <option>H8</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Contact Number</label>
    <input type="number" class="form-control form-control-lg w-50 p-3" id="exampleFormControlInput1" placeholder="Insert your phone number for emergency" name="contact">
  </div>
        <button type="submit" class="btn btn-success btn-lg">Check Out</button>
</form>
<br>
</div>
@endsection