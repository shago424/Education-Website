@extends('frontend.layouts.master')
	@section('content')

<div class="row" style="padding-top: -20px">
        <div class="col-md-12" style="margin: auto;padding-top: 0">
          
   <div class="card">
    <img src="{{asset('public/frontend/')}}/image/breadcrumb.jpg" style="width: auto;height: 100px">
      
             <div class="container" style="position: relative;padding-right: 10px">
            <div class="row" style="position: absolute;margin-top: -100px;margin-left: 400px;">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: #CFD1C8">All Stuff Information</h2>
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
                    <th>Index No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Subject</th>
                    <th>Mobile</th>
                    <th style="text-align: center;">Photo</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($stuffs as $key => $stuff)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$stuff->index_no}}</td>
                      <td>{{$stuff->name}}</td>
                      <td>{{$stuff->desi}}</td>
                      <td>{{$stuff->subject}}</td>
                      <td>{{$stuff->mobile}}</td>
                      <td style="text-align: center;"><img style="width: 50px;height: 60px" 
                       src="{{(!empty($stuff->image))?url('public/upload/stuffimage/'.$stuff->image):url('public/upload/usernoimage.png')}}"
                       alt="post profile picture"></td>
                      <td>
                    <a title="page" href="" class="btn btn-primary btn-sm"><i class="fa fa-eye">Info</i></a>
                      </td> 
                    </tr>
                    @endforeach
                  </tbody>
					       		
					       	</table>
					    </div>
				


	@endsection