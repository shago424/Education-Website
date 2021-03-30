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
                        <h2 style="color:#CFD1C8">Chiarman</h2>
                        <div class="breadcrumb__option">
                            <a style="font-size: 18px;color:#CFD1C8" href="{{url('./')}}">Home</a>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>
					    
					    <div class="card-body" style="height: auto;padding: 40px">
					       	<div class="row">
					    		<div class="col-sm-3" >
					    	
					<img src="{{asset('public/upload/chiarmanimage/'.$chiarmans->image)}}" style="border: 1px solid #ddd;padding: 5px;background:  #587c6e ;float: left;margin-right: 5px;width: 180px;height: 180px">
					</div>
					<div class="col-sm-9">
					<p style="text-align: justify;font-size: 17px"><strong style="color: green;font-size: 18px"> </strong> {{$chiarmans->title}}</p>
					</div>
					    </div>
					    </div>
					    </div>
					 </div>
					 </div>

	@endsection