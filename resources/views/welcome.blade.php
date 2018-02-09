@extends('layouts.app')

@section('css')
<!-- Custom styles for this template -->
<style>
  :root {
    --jumbotron-padding-y: 3rem;
  }
  .jumbotron {
    padding-top: var(--jumbotron-padding-y);
    padding-bottom: var(--jumbotron-padding-y);
    margin-bottom: 0;
    background-color: #fff;
  }
  @media (min-width: 768px) {
    .jumbotron {
      padding-top: calc(var(--jumbotron-padding-y) * 2);
      padding-bottom: calc(var(--jumbotron-padding-y) * 2);
    }
  }
  .jumbotron p:last-child {
    margin-bottom: 0;
  }
  .jumbotron-heading {
    font-weight: 300;
  }
  .jumbotron .container {
    max-width: 40rem;
  }
  footer {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }
  footer p {
    margin-bottom: .25rem;
  }
  .box-shadow { 
    box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); 
  }
  
  .card {
    color: #212529;
  }
  
  .card:hover {
    box-shadow: 0 28px 36px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    color: #000000;
  }
  
  .link-card{
    text-decoration: none;
  
  }
  
  .link-navbar{
    color: #343a40;
    
  }
  
  .link-navbar:hover{
    text-decoration: none;
    color: #b3b3b3!important;
  }
  
  .text{
    color: #ff0000;
  }
  
  .card-bar:hover{
    box-shadow: none;
  }
  
  .card-bar{
    
    border-radius: 8px;
    
  }
  
</style>
@endsection

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block mw-100 w-100" src="http://www.opusnusantara.com/images/Slider1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ini Judul</h5>
        <p>Ini Subjudul</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block mw-100 w-100" src="http://www.opusnusantara.com/images/Slider2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ini Judul</h5>
        <p>Ini Subjudul</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block mw-100 w-100" src="http://www.opusnusantara.com/images/logo_opus.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Ini Judul</h5>
        <p>Ini Subjudul</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="album py-5 bg-light">
  <div class="container">
    
      <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Well done!</h4>
      <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
    
    <div class="row">
      
      <div class="col-lg-4">
        <a class="card-link" href="/lomba.html">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_BIOPC_2017.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <small class="text-muted">by OPUS NUSANTARA</small>
                </div>
                <small class="text">9 hari lagi</small>
              </div>
            </div>
          </div>
        </a>
      </div>
      
      <div class="col-lg-4">
        <a class="card-link" href="/">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_KPP_2018.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">19 hari lagi</small>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a class="card-link" href="/">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_BOPC_2017.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">9 hari lagi</small>
            </div>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/posterUMI.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">9 hari lagi</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <a class="card-link" href="/">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_BIOPC_2017.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">9 hari lagi</small>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a class="card-link" href="/">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/posterUMI.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">9 hari lagi</small>
            </div>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-4">
        <a class="card-link" href="/">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/posterUMI.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">9 hari lagi</small>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a class="card-link" href="/">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_KPP_2018.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">9 hari lagi</small>
            </div>
          </div>
        </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a class="card-link" href="/">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="http://www.opusnusantara.com/images/Poster_KPP_2018.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <small class="text-muted">by OPUS NUSANTARA</small>
              </div>
              <small class="text">9 hari lagi</small>
            </div>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection


@section('js')
<script>
</script>
@endsection