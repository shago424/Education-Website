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
                        <h2 style="color: #CFD1C8">All Event Notice</h2>
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
              
              <div class="card-body" style="height: auto;padding: 10px">
					     <table class="table table-bordered" id="example" style="width: 100%">
				<thead>
                   <tr style="background-color: green;color: white">
                    <th>SL</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>File</th>
                    <th>Action</th>
                  </tr>
                </thead>
            <tbody>
                    @foreach($events as $key => $event)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$event->post_title}}</td>
                      <td>{{date('d-M-Y',strtotime($event->post_date))}}</td>
                      <td> <a class="btn btn-danger btn-sm" href="{{asset('public/upload/postfile/'.$event->post_file)}}" target="_blank">Download</a></td>
                      <td>
                    <a title="page" href="{{route('posts.page',$event->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye">View</i></a>
                      </td> 
                    </tr>
                    @endforeach
             </tbody>
					       		
					       	</table>
					    </div>
					

	@endsection