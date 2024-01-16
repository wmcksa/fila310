<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>{{$settings->site_name}}</title>    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>

  <body>
    <div class="text-center mb-2 " style =" background: #ffffff!important; color: rgb(255, 255, 255)     ">
        <br>
         
        <a class="" href="#">
            <img src="{{asset("storage/$settings->logo")}}" alt="" width="150px" height="150px">
             
          </a>
    
      <br>
        <h3 style="color:black">
 
            {{$settings->site_name}}
    
        </h3>
        <br>
      </div>
 
      <div class="">
    
        <nav class="navbar  fixed-top navbar-light bg-light ">
            <div class="container-fluid">
              <a class="navbar-brand" href="   {{$settings->site_url}}">موقعنا الالكتروني </a>
              <a class="navbar-brand" href="https://musaned.com.sa/home">  مساند</a>
              <a class="navbar-brand" href="https://wa.me/{{$settings->phone}}">    وتساب</a>
              <a class="navbar-brand" href="tel:+{{$settings->phone}}">  اتصال  </a>
            </div>
          </nav>
    </div>

  </body>

<div class="mt-1 mb-1">
    @include('frontend.slider')
</div>

<div class="mt-1 mb-1">
    @include('frontend.searchBar')
</div>


<div class="mt-1 mb-1">
    @include('frontend.cvs')
</div>


























<style>

.navbar-brand img {
  width: 80px;
}
.navbar-nav {
  align-items: center;
}
.navbar .navbar-nav .nav-link {
  color: #fff;
  font-size: 1.1em;
  padding: 0.5em 1em;
}
@media screen and (min-width: 768px) {
  .navbar-brand img {
    width: 100px;
  }
  .navbar-brand {
    margin-right: 0;
    padding: 0 1em;
  }
}
















.carousel {
  width:100%;
  height:300px;
  margin:0 auto;
}

.carousel-inner {
    position: relative;
    width: 100%;
    height:300px;
    overflow: hidden;
}

 

@media only all and (max-width: 500px) {
  

  .carousel {
  width:100%;
  height:150px;
  margin:0 auto;
}




.carousel-inner {
    position: relative;
    width: 100%;
    height:150px;
    overflow: hidden;
}



}

body { padding-top: 70px; }

</style>





