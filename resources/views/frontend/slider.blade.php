<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"   >
    <div class="carousel-inner">



        
        

        @foreach ($baners as $key => $baner)
                             
     

        @if($key== 0)
        <div class="carousel-item active">
            <img src="storage/{{$baner->image}}" class="d-block w-100" alt="...">
          </div>
          
          @else
          <div class="carousel-item">
            <img src="storage/{{$baner->image}}" class="d-block w-100" alt="...">
          </div>
        @endif



       

           

        @endforeach







     

   

      





    </div>
   <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">السابق</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">التالي</span> 
    </button>
  </div>