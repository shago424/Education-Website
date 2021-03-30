@extends('frontend.layouts.master')
	@section('content')
@include('frontend.layouts.slider')
<div style="padding-bottom:  10px;margin-right: 12px;margin-left: 15px" class="argentnotice">
  <div class="row" >
    
    <div style="background-color: green;color: white" class="col-sm-3">
        <h5><strong> Argent Notice</strong></h5>

      </div>
      <div style="padding-top: 7px;background-color:#DAF7A6;color: blue" class="col-sm-9">

                  @foreach($argents as $argent) 
        <marquee direction = "left" scrollamount="6px" onmouseover="this.stop()" onmouseout="this.start()">       
                        <i class="fa fa-stop-circle"></i> <a style="color: red" href="{{route('posts.page',$argent->id)}}"><strong> {{$argent->post_title}}</strong></a>
                         @endforeach
                        </marquee>

      </div>
    </div>
    </div>
	<!-- HOME -->
		<div class="row" style="margin-left: 0px;margin-right: 0px" >

				<div class="col-sm-9" style="margin-left: 0px;padding-left: 0">
				<div class="panel panel-primary" id="result_panel" style="height: 275px;background-color: #D5DFE1  ;padding-left: 20;padding-right: 20;" >
				 <div class="panel-heading" style="background-color:   #073C51 ;color: white"><h3 class="panel-title">College History</h3>
					    </div>
					    <div class="panel-body">
					       <img src="{{asset('public/upload/historyimage/'.$histories->image)}}" style="border: 1px solid #ddd;padding: 5px;background:   #272b84  ;float: left;margin-right: 10px;width: 200px;height: 200px">
					<p style="text-align: justify;">{{$histories->short_title}}  ---  <a class="btn btn-danger btn-sm" href="{{route('histories.postview')}}">Read More</a></p> 
					    </div>
					</div>
				</div>


			 <div class="col-sm-3" style="margin-left:  0px;padding-left: 25px;padding-right: 3px">
					<div class="panel panel-primary" id="result_panel" style="height: 275px;background-color: #EBEBEA">
					    <div class="panel-heading" style="background-color: #B78309;color: white">
					    	<h3 style="padding-bottom: 5px" class="panel-title">Information Category</h3>
					    </div>
					    <div class="card-body">
					
					 <ul style="font-size: 14px">
					            <li  style="padding: 5px"> <a  href="{{route('posts.alladmissionpostview')}}" target="_blank"><strong style="color: red">
					                Admission Info</strong></a> 
					            </li>
					            <li  style="padding: 5px"> <a  href="{{route('posts.allexampostview')}}"target="_blank"><strong style="color: red">
					               Exam Info</strong></a> 
					            </li>
					             <li  style="padding: 5px"> <a  href="{{route('posts.allresultpostview')}}"target="_blank"><strong style="color: red">
					               Result Info</strong></a> 
		 			            </li>
					            <li  style="padding: 5px"> <a  href="#"target="_blank"><strong style="color: red">
					              Class Routine</strong></a> 
					            </li>
					            <li style="padding: 5px"> <a href="{{route('posts.eventallview')}}"target="_blank"><strong style="color: red">
					               Event News</strong></a> 
					            </li>
					            <li style="padding: 5px" > <a href="{{route('posts.photogalary')}}"target="_blank"><strong style="color: red">
					                Photo Gallery</strong></a> 
					            </li>
					            <li style="padding: 5px" > <a href="{{route('posts.videogalary')}}"target="_blank"><strong style="color: red">
					                Video Gallery</strong></a> 
					            </li>
					        </ul>
					    
							
					</div>
				</div>
			</div>
		</div>

		<!-- Principal Letter Strat -->
		
		
			
			  <div class="row" style="padding-left: 10;padding-right: 110;">
				<div class="col-sm-9">
					<div class="col-sm-6" style="margin-left: 0px;padding-left: 0">
				<div class="panel panel-primary" id="result_panel" style="height: 250px;background-color: #F1E8F8" >
				 <div class="panel-heading" style="background-color:   #950554 ;color: white"><h3 class="panel-title">Chiarman</h3>
					    </div>
					    <div class="panel-body">
					       <img src="{{asset('public/upload/chiarmanimage/'.$chiarmans->image)}}" style="border: 1px solid #ddd;padding: 2px;background:   yellow  ;border-radius: 100px;float: left;margin-right: 10px;width: 150px;height: 150px">
					<p style="text-align: justify;">{{$chiarmans->short_title}}  ---  <a class="btn btn-danger btn-sm" href="{{route('chiarmans.postview')}}">Read More</a></p>
					    </div>
					</div>
				</div>


			<div class="col-sm-6">
				<div class="panel panel-primary" id="result_panel"style="height: 250px;background-color: #F3F8E8"  >
				 <div class="panel-heading" style="background-color:   #158C97 ;color: white"><h3 class="panel-title">Principal</h3>
					    </div>
					    <div class="panel-body">
					      <img src="{{asset('public/upload/principalimage/'.$principals->image)}}" style="border: 1px solid #ddd;padding: 2px;background:   yellow  ;border-radius: 100px;float: left;margin-right: 10px;width: 150px;height: 150px">
					<p style="text-align: justify;">{{$principals->short_title}}  ---<a class="btn btn-danger btn-sm" href="{{route('principals.postview')}}">Read More</a></p>
					    </div>
					</div>
				</div>
			</div>


				

				<div class="col-sm-3">
				<section >
					<div class="panel panel-primary" id="result_panel" style="margin: 0;">
				<div class="panel-heading"style="background-color:    #13562a 
;color: white"><h3 class="panel-title">All Notice <a style="padding-bottom: 0;padding-top: 0;height: 25px;font-size: 16px;color: black" class="btn btn-warning btn-sm float-right" href="{{route('posts.allpostview')}}">All View</a></h3>
					    </div>
					    
					        <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						<ul>
								@foreach($alls as $all)					
                                <li><a href="{{route('posts.page',$all->id)}}">{{$all->post_title}}</a></li>
                               @endforeach
                                
                            </ul>
					</marquee>
					    
					</div>
			</section> 
				</div>
		</div>
	

		
		<!-- Principal Letter end -->

		<!-- left Sidebar start-->
		
			<div class="row"  class="sidebar" style="padding-top: 3px;padding-left: 0;padding-right: 5px;">
<!-- Left Sidebar End-->
<!-- Main Content Strat-->
											<!-- Post card -->
			       <div class="col-sm-9" style="margin-left: 0px;padding-left: 0">
					<div class="panel panel-primary" id="result_panel"style="margin-right: 12px;margin-left: 12px;background-color: #E6F1F9">
					    <div class="panel-heading" style="text-align: right">
					    	<h3 style="padding-bottom: 5px;text-align: center;" class="panel-title">Recent Post</h3>
					    	<span style="font-size: 18px" class="glyphicon glyphicon-time">  Post Date</span>  {{date('d-M-Y',strtotime($publishpost->post_date))}}
					    	
					    </div>
					    <div class="card-body" style="height: 175px">
					    	<div class="row">
					    		<div class="col-sm-3" >
					<img src="{{asset('public/upload/postimage/'.$publishpost->image)}}" style="border: 1px solid #ddd;padding: 5px;background:  #587c6e ;float: left;margin-right: 5px;width: 125px;height: 125px">
					
					</div>
					<div class="col-sm-9">
					<p style="text-align: justify;"><strong style="color: green;font-size: 18px">Title : {{$publishpost->post_title}} </strong><br>{{$publishpost->short_title}} ---<a class="btn btn-danger btn-sm" href="{{route('posts.page',$all->id)}}">Read More</a></p><div class="fb-share-button" data-href="https://www.facebook.com/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div> <hr>
					</div>
					    </div>
							</div>
								
					</div>

           <!-- First card -->

				    <div class="col-sm-6">
					<div class="panel panel-primary" id="result_panel" style="height: 300px;background-color: #EBEBEA">
					    <div class="panel-heading" style="background-color: #B74267;color: white">
					    	<h3 style="padding-bottom: 5px" class="panel-title">Admission Information <a style="padding-bottom: 0;padding-top: 0;height: 25px;font-size: 16px;color: white" class="btn btn-primary btn-sm float-right" href="{{route('posts.alladmissionpostview')}}">All View</a></h3>
					    </div>
					    <div class="card-body">
					    	<div class="row">
					    	<div class="col-sm-3">
					<img src="{{asset('public/frontend')}}/image/first-card.png" style="float: left;margin-right: 5px;width: 100px;height: 100px;margin-top: 30px">
					</div>

					<div class="col-sm-9">
					   <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						<ul>
								@foreach($admissions as $admission)					
                                <li style="font-size: 16px"><a href="{{route('posts.page',$admission->id)}}">{{$admission->post_title}}</a></li>
                               @endforeach
                                
                            </ul>
					</marquee>
					    </div>
							</div>	
					</div>
				</div>
			</div>
					<!-- Second card -->

					 <div class="col-sm-6">
					<div class="panel panel-primary" id="result_panel" style="height: 300px;background-color: #EBEBEA">
					    <div class="panel-heading" style="background-color: #088004;color: white">
					    	<h3 style="padding-bottom: 5px" class="panel-title">Exam Information <a style="padding-bottom: 0;padding-top: 0;height: 25px;font-size: 16px;color: black" class="btn btn-warning btn-sm float-right" href="{{route('posts.allexampostview')}}">All View</a></h3>
					    </div>
					    <div class="card-body">
					    	<div class="row">
					    	<div class="col-sm-3">
					<img src="{{asset('public/frontend')}}/image/second-card.png" style="float: left;margin-right: 5px;width: 100px;height: 100px;margin-top: 30px">
					</div>

					<div class="col-sm-9">
					            <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						<ul>
								@foreach($exams as $exam)					
                                <li style="font-size: 16px"><a href="{{route('posts.page',$exam->id)}}">{{$exam->post_title}}</a></li>
                               @endforeach
                                
                            </ul>
					</marquee>
					    </div>
							</div>	
					</div>
				</div>
			</div>
					<!-- Third card -->

				 <div class="col-sm-6">
					<div class="panel panel-primary" id="result_panel" style="height: 300px;background-color: #EBEBEA">
					    <div class="panel-heading" style="background-color: #B78309;color: white">
					    	<h3 style="padding-bottom: 5px" class="panel-title">Result Information <a style="padding-bottom: 0;padding-top: 0;height: 25px;font-size: 16px;color: white" class="btn btn-primary btn-sm float-right" href="{{route('posts.allresultpostview')}}">All View</a></h3>
					    </div>
					    <div class="card-body">
					    	<div class="row">
					    	<div class="col-sm-3">
					<img src="{{asset('public/frontend')}}/image/third-card.png" style="float: left;margin-right: 5px;width: 100px;height: 100px;margin-top: 30px">
					</div>

					<div class="col-sm-9">
					<marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						<ul>
								@foreach($results as $result)					
                                <li style="font-size: 16px"><a href="{{route('posts.page',$result->id)}}">{{$result->post_title}}</a></li>
                               @endforeach
                                
                            </ul>
					</marquee>
					    </div>
							</div>	
					</div>
				</div>
			</div>

						<!-- Forth card -->

			 <div class="col-sm-6">
					<div class="panel panel-primary" id="result_panel" style="height: 300px;background-color: #EBEBEA">
					    <div class="panel-heading" style="background-color:#0D54BA;color: white">
					    	<h3 style="padding-bottom: 5px" class="panel-title">Teacher And Stuff Information</h3>
					    </div>
					    <div class="card-body">
					    	<div class="row">
					    	<div class="col-sm-3">
					<img src="{{asset('public/frontend')}}/image/forth-card.png" style="float: left;margin-right: 5px;width: 100px;height: 100px;margin-top: 30px">
					</div>

					<div class="col-sm-9">
					 <ul style="font-size: 16px">
					             <li  style="padding: 5px"> <a  href="{{route('stuffs.stuffallview')}}"><strong style="color: black">
					                Teacher and Stuff Info</strong></a> 
					            </li>
					            <li style="padding: 5px"> <a href=""><strong style="color: black">
					                Accommodations</strong></a> 
					            </li>
					            <li style="padding: 5px"> <a href=""><strong style="color: black">
					                Accommodations</strong></a> 
					            </li>
					          
					        </ul>
					    </div>
							</div>	
					</div>
				</div>
			</div>

			</div>





<!--  2nd-->

			 <div class="col-sm-3" >
				<section >
					<div class="panel panel-primary" id="result_panel" style="margin: 0;">
				<div class="panel-heading"style="background-color:    #bdd845 
;color: black"><h3 class="panel-title">Recent Notice  <a style="padding-bottom: 0;padding-top: 0;height: 25px;font-size: 16px" class="btn btn-danger btn-sm float-right" href="{{route('posts.allpostview')}}">All View</a></h3>
					    </div>
					    
					       <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						<ul>						
                               @foreach($recents as $recent)					
                                <li ><a href="{{route('posts.page',$recent->id)}}">{{$recent->post_title}}</a></li>
                               @endforeach
                                
                            </ul>
					</marquee>
					    
					</div>
			</section> 
			<br>
<section >
					<div class="panel panel-primary" id="result_panel"style="margin: 0">
				<div class="panel-heading"style="background-color:   #35aed2 
;color: black"><h3 class="panel-title">Event Notice <a style="padding-bottom: 0;padding-top: 0;height: 25px;font-size: 16px" class="btn btn-warning btn-sm float-right" href="{{route('posts.eventallview')}}">All View</a></h3>
					
					    </div>
					    
					        <marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						<ul>
														
                                @foreach($events as $event)					
                                <li><a href="{{route('posts.page',$event->id)}}">{{$event->post_title}}</a></li>
                                @endforeach
                                
                            </ul>
					</marquee>
					    
					</div>
			</section> 
			<br>
				<section >
					<div class="panel panel-primary" id="result_panel"style="margin: 0">
				<div class="panel-heading"style="background-color:   #263995 
;color: white"><h3 class="panel-title">Eaducational Link</h3>
					    </div>
					   
					        <ul class="list-group">
					           <li style="background-color: #AB9A9D" class="list-group-item"> <a href="http://www.shed.gov.bd" target="_blank"><strong style="color: black"> Ministri Of Education</strong></a> 
					            </li>
					            <li style="background-color: #AB9A9D" class="list-group-item"> <a href="http://www.dshe.gov.bd" target="_blank"><strong style="color: black">DG Office</strong></a> 
					            </li>
					            <li style="background-color: #AB9A9D" class="list-group-item"> <a href="http://www.nu.cc.bd" target="_blank"><strong style="color: black">National University</strong></a> 
					            </li>
					            <li style="background-color: #AB9A9D" class="list-group-item"> <a href="http://www.rajshahieducationboard.gov.bd" target="_blank"><strong style="color: black">Rajshahi Board</strong></a> 
					            </li>
					         <li style="background-color: #AB9A9D" class="list-group-item"> <a href="http://www.emis.gov.bd" target="_blank"><strong style="color: black">EMIS</strong></a> 
					            </li>
					            <li style="background-color: #AB9A9D" class="list-group-item"> <a href="http://www.banbeis.gov.bd" target="_blank"><strong style="color: black">Banbaise</strong></a> 
					            </li>
					            
					           
					        </ul>
					   
					</div>
			</section>
		</div>


		</div>
@endsection
	