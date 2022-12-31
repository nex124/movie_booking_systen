@extends('master')

@section('slideshow')
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <center>
    <img src="https://m.media-amazon.com/images/M/MV5BZWMyYzFjYTYtNTRjYi00OGExLWE2YzgtOGRmYjAxZTU3NzBiXkEyXkFqcGdeQXVyMzQ0MzA0NTM@._V1_.jpg" style="width: 350px;">
    <br>
    <div class="text">Spiderman No Way Home</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <center>
    <img src="https://m.media-amazon.com/images/M/MV5BMDEzZDY2ZDktNTlmOS00NThjLThkNTEtMjE5MzI5NWEwZmRjXkEyXkFqcGdeQXVyMDA4NzMyOA@@._V1_.jpg" style="width: 350px;">
    <div class="text">The King's Man</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <center>
    <img src="https://goggler.my/wp-content/uploads/2021/11/EncantoPoster3.jpg" style="width: 500px;">
    <div class="text">Encanto</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2500); // Change image every 5 seconds
}
</script>

@endsection

@section('update')
<center>
<table class="table table-bordered" style="width: 1500px;">
  <thead class="thead-dark">
  @foreach($mydata2 as $movie2)  
    <tr>
      <th scope="col">Name</th>
      <td>{{$movie2->name}}</td>   
    </tr>
  </thead> 
  <tbody>
  <thead class="thead-dark">   
    <tr>
      <th scope="col">Email address</th>  
      <td>{{$movie2->email}}</td>
    </tr>
    </thead> 
    <thead class="thead-dark"> 
    <tr>
       <th scope="col">Password (encrypted)</th>
       <td>{{$movie2->password}}</td>
    </tr>
    </thead> 
  </tbody>
  <a href="/edit/{{$movie2->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
  @endforeach  
</table>
@endsection

