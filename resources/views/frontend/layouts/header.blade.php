<!-- Header Section -->
	<div class="container">
        <div class="header-top" style="margin-top: 15px">
     
      <div class="row">
        <div class="col-sm-7">
          <div  class="row">
          <div class="col-sm-3">
          <img src="{{asset('public/upload/logoimage/'.$logo->image)}}" style="width: 100px">
            </div>
          <div class="col-sm-9"> 
          <h2> <strong>Bootstrap Template</strong></h2>
          <p> <strong>This is my first bootstrap template. This is my first bootstrap template.</strong></p>
                  </div>
                </div>
              </div>
            <div class="col-sm-5">
          <img src="{{asset('public/upload/bannerimage/'.$banner->image)}}" style="width: 350px;height: 125px"h>
        </div>
      </div>
    </div>
  
  <!-- hedader Section End  --->
  
     <nav class="navbar navbar-expand-md " id="navbar_top" style="margin-bottom: 0;background-color: black">
  <!-- Brand -->
  <a class="navbar-brand" href="{{url('./')}}"><i class="fa fa-home"></i></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" style="background-color: blue"data-toggle="collapse" data-target="#collapsibleNavbar" >
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul style="font-size: 18px" class="navbar-nav">
      <li class="nav-item">
        <a  style="color: white" class="nav-link" href="{{url('./')}}">Home</a>
      </li>
      <li class="nav-item">
        <a  style="color: white" class="nav-link" href="{{route('histories.postview')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a  style="color: white" class="nav-link" href="{{route('contact.us')}}">Contac Us</a>
      </li>
      <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Notice
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.allpostview')}}">All Notice</a>
        <a class="dropdown-item" href="{{route('posts.allpostview')}}">Recent Notice</a>
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Event Notice</a>
        <a class="dropdown-item" href="{{route('posts.alladmissionpostview')}}">Admission Notice</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Exam Notice</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Result Notice</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admission
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.alladmissionpostview')}}">Eleven</a>
        <a class="dropdown-item" href="{{route('posts.alladmissionpostview')}}">Twelve</a>
        <a class="dropdown-item" href="{{route('posts.alladmissionpostview')}}">Degree</a>
        <a class="dropdown-item" href="{{route('posts.alladmissionpostview')}}">Honours</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Exam
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Eleven</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Twelve</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Degree</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Honours</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Result
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Eleven</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Twelve</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Degree</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Honours</a>
      </div>
    </li>
       <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Routine
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Eleven</a>
        <a class="dropdown-item" href="#">Twelve</a>
        <a class="dropdown-item" href="#">Degree</a>
        <a class="dropdown-item" href="#">Honours</a>
      </div>
    </li>
       <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Information
      </a>
      <div class="dropdown-menu">
        <a  style="color: white" class="dropdown-item" href="{{route('stuffs.stuffallview')}}">Governing Body</a>
        <a class="dropdown-item" href="#">Administation</a>
        <a class="dropdown-item" href="{{route('stuffs.stuffallview')}}">Teacher</a>
        <a class="dropdown-item" href="{{route('stuffs.stuffallview')}}">Stuff</a>
        <a class="dropdown-item" href="histories.postview">College</a>
        <a class="dropdown-item" href="#">Library</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Login
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('login')}}">Admin</a>
        <a class="dropdown-item" href="{{route('login')}}">Teacher</a>
        <a class="dropdown-item" href="{{route('login')}}">Student</a>
        <a class="dropdown-item" href="{{route('login')}}">Librarian</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Gallery
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Event News</a>
        <a class="dropdown-item" href="{{route('posts.photogalary')}}">Photo Gallery</a>
        <a class="dropdown-item" href="{{route('posts.videogalary')}}">Video Gallery</a>
        
      </div>
    </li>
    </ul>
  </div>
</nav> 

