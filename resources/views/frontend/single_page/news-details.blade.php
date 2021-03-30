
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
                        <h2 style="color: #CFD1C8">News Details</h2>
                        <div class="breadcrumb__option">
                            <a style="font-size: 18px;color: #CFD1C8" href="{{url('./')}}">Home</a>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>
                </div>
            </div> 
        </div>
					    
					    <div class="card-body" style="height: auto;padding: 40px">
			<div class="row">
				<div class="col-md-12">
					<img src="{{asset('public/upload/news_eventimage/'.$news->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;width: 265px;height: 265px">
					<h5 style="text-align: justify;"><strong>Title : {{$news->short_title}} 
					</strong> <br> <br> <strong> Publish Date : {{date('d-M-Y',strtotime($news->date))}} </strong>   <hr/>  <strong>Details</strong> :  {{$news->long_title}}</h5>
				</div>
			</div>
		</div>
	</section>

	@endsection