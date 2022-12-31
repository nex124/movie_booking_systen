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
    <div class="numbertext">3 / 4</div>
    <center>
    <img src="https://goggler.my/wp-content/uploads/2021/11/EncantoPoster3.jpg" style="width: 500px;">
    <div class="text">Encanto</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 7</div>
    <center>
    <img src="https://m.media-amazon.com/images/M/MV5BNTFiNzBlYmEtMTcxZS00ZTEyLWJmYmQtMjYzYjAxNGQwODAzXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg" style="width: 500px;">
    <div class="text">Venom 2</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 7</div>
    <center>
    <img src="https://maactioncinema.com/wp-content/uploads/2022/01/271272243_674950080325323_172051113785200865_n.jpg" style="width: 500px;">
    <div class="text">New Kung Fu Cult Master 1</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 7</div>
    <center>
    <img src="https://m.media-amazon.com/images/M/MV5BOTI4NDhhNGEtZjQxZC00ZTRmLThmZTctOGJmY2ZlOTc0ZGY0XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg" style="width: 500px;">
    <div class="text">Nightmare Alley</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">7 / 7</div>
    <center>
    <img src="https://m.media-amazon.com/images/M/MV5BYWQ2NzQ1NjktMzNkNS00MGY1LTgwMmMtYTllYTI5YzNmMmE0XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg" style="width: 500px;">
    <div class="text">No Time To Die</div>
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
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>  
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

 @section('images')
<div class = "banner">
    <img src ="https://pbs.twimg.com/media/FBXkwHdWYAMcpZ9.jpg" width ="1100px" height ="350px">
</div>
 @endsection

 @section('table')
 <center>
 <table class="table table-bordered" style="width: 1500px;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Movie Name</th>
      <th scope="col">Synopsis</th>
      <th scope="col">Age-Restriction</th>
      <th scope="col">Venue</th>
      <th scope="col">Book Movie</th>
    </tr>
  </thead>
  
  @foreach($data as $movie)
  <tbody>
    <tr>
      <td>{{$movie->movie_name}}</td>  
      <td>{{$movie->synopsis}}</td>
      <td>{{$movie->age_restricted1}}</td>
      <td>{{$movie->venue}}</td>
      <td><a href="/page2" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Book Now!</a></td>
    </tr>
   @endforeach 
  </tbody>
</table>
<center>
@endsection

 