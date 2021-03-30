@extends('frontend.layouts.master')
	@section('content')

<div class="row" style="padding-top: -20px">
        <div class="col-md-12" style="margin: auto;padding-top: 0">
          
   <div class="card">
    <img src="{{asset('public/frontend/')}}/image/breadcrumb.jpg" style="width: auto;height: 100px">
      
             <div class="container" style="position: relative;padding-right: 10px">
            <div class="row" style="position: absolute;margin-top: -100px;margin-left: 450px;">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color:#CFD1C8">Photo Gallery</h2>
                        <div class="breadcrumb__option">
                            <a style="font-size: 18px;color:#CFD1C8" href="{{url('./')}}">Home</a>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>
                </div>
            </div> 
        </div>
					    
	<div class="container">
<div class="card-body" style="height: auto;">
  <br>
  <div class="row">
    @foreach($photos as $photo)
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="{{asset('public/upload/photoimage/'.$photo->image)}}" target="_blank">
          <img src="{{asset('public/upload/photoimage/'.$photo->image)}}" alt="Lights" style="width:100%;height: 200px">
          <div class="caption">
            <p>{{$photo->title}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
   
  </div>
</div>
</div>
</div>
	@endsection