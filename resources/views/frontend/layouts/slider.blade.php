@php
$count = 0;  
@endphp
   <!-- Navbar links ends -->
   <!-- slider strat -->
  <div class="ourslider">
      
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    @foreach($sliders as $key=> $slider)
    <li data-target="#demo" data-slide-to="{{$key}}" class="@if($count == 0){ active } @endif"></li>
    @endforeach
  </ul> 
       <div class="carousel-inner" role="listbox">
         @foreach($sliders as $slider)
         <div class="carousel-item @if($count == 0){ active } @endif"
       style="background-image: url({{asset('public/upload/sliderimage/'.$slider->image)}});height: 300px">
      <div class="carousel-caption">
        <h3>{{$slider->short_title}}</h3>
        <p>{{$slider->long_title}}</p>
      </div>   
        </div>
        @php
        $count++ 
        @endphp 
        @endforeach
  </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span></a>
  
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
      </div>
    
</div>
