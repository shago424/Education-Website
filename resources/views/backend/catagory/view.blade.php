@extends('backend.layouts.master')
@section('content')




 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Post</h1>
          </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
       <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
           
           <div class="card">

        <div style="background-color: green" class="card-header">
          <h6 style="color: white"> Catagory List</h6>
          </div>
          <div class="card-body">
          	@if(session('update'))
         			 	<div class="alert alert-success alert-dismissible fade show" role="alert">
         			 		<strong>{{session('update')}}</strong>
         			 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         			 	</div>
         			 	@endif

         			 	@if(session('inactive'))
         			 	<div class="alert alert-success alert-dismissible fade show" role="alert">
         			 		<strong>{{session('inactive')}}</strong>
         			 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         			 	</div>
         			 	@endif

         			 	@if(session('active'))
         			 	<div class="alert alert-success alert-dismissible fade show" role="alert">
         			 		<strong>{{session('active')}}</strong>
         			 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         			 	</div>
         			 	@endif
         			 	@if(session('delete'))
         			 	<div class="alert alert-success alert-dismissible fade show" role="alert">
         			 		<strong>{{session('delete')}}</strong>
         			 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         			 	</div>
         			 	@endif
             <div class="table-wrapper">
            <table id="example1" class=" table table-bordered table-sm  table-hover" class="table display responsive nowrap" >
              <thead>
                <tr>
                  <th>Sl</th>
                  <th>ID</th>
                  <th>Catagory Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($catagories as $key => $catagory)
                <tr>
                  <td>{{$key+1}}</td>
                  <td style="text-align: center;">{{$catagory->id}}</td>
                  <td>{{$catagory->catagory_name}}</td>
                 
                  <td>
                  	 @if($catagory->status==1)
                  	<span class="badge badge-success">Active</span>
                  	@else
                  	<span class="badge badge-danger">Inactive</span>
                  	@endif
                  </td>


                  <td style="text-align: center;">
                  	@if($catagory->status==1)
                  	<a href="{{route('catagory.inactive',$catagory->id)}}"class="btn btn-danger btn-sm"><i class="fa fa-arrow-down"> </i></a>
                  	@else
                  	<a href="{{route('catagory.active',$catagory->id)}}"class="btn btn-success btn-sm"><i class="fa fa-arrow-up"> </i></a>
                  	@endif
                  	<a href="{{route('catagory.edit',$catagory->id)}}"class="btn btn-primary btn-sm"><i class="fa fa-edit"> </i></a>
                  	<a id="delete" href="{{route('catagory.delete',$catagory->id)}}" onclick="return confirm('Are You Sure To Delete')"class="btn btn-danger btn-sm"><i class="fa fa-trash"> </i></a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
          </div><!-- card body -->
        </div><!-- card -->
    </div>

			<div class="col-md-4">
          	
          <div class="card">
        <!-- sl-page-title -->

        		<div style="background-color: #a72c5d" class="card-header">
         		 <h6 style="color: white">Add Catagory</h6>
         		 </div>
         			 <div class="card-body">

         			 	@if(session('success'))
         			 	<div class="alert alert-success alert-dismissible fade show" role="alert">
         			 		<strong>{{session('success')}}</strong>
         			 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         			 	</div>
         			 	@endif

         			 	<form method="post" action="{{route('catagory.store')}}">
         			 		@csrf

         			 <div class="form-group">
                  <label class="form-control-label">Catagory Name <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="catagory_name"  placeholder="Enter Catagory Name">
                  @error('catagory_name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                <div class="form-layout-footer">
                    <button type="submit" name="submit" class="btn btn-primary"><strong>Add Catagory</strong> </button>
                    
                  </div>
         			 	</form>
 					 </div>
				</div>
			</div>
   
</div>
		</div>
</section>
</div>
     



    @endsection