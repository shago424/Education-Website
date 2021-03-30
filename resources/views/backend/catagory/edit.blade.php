@extends('backend.layouts.master')
@section('content')




 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
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
          <section class="col-md-6  offset-md-3">
           
           <div class="card">
        <!-- sl-page-title -->

        		<div style="background-color: green" class="card-header">
         		 <h6 style="color: white">Update Catagory<a class="btn btn-danger float-right" href="{{route('catagory.view')}}"> Catagory List</a>
         		 </div>
         			 <div class="card-body">
                @if(session('update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('update')}}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                @endif
         			 	<form method="post" action="{{route('catagory.update',$catagories->id)}}">
         			 		@csrf
         			 <div class="form-group">
                  <label class="form-control-label">Catagory Name <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" value="{{@$catagories->catagory_name}}" name="catagory_name"  placeholder="Enter Catagory Name">
                  @error('catagory_name')
                  <span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                <div class="form-layout-footer">
                    <button type="submit" name="submit" class="btn btn-primary"><strong>Update Catagory</strong> </button>
                    
                  </div>
         			 	</form>
 					 </div>
				</div>
      </section>
			</div>

		</div>
	</div>
</div>
        




<script type="text/javascript">
       
       $('#datatable2').DataTable({
  bLengthChange: false,
  searching: false,
  responsive: true
});
</script>


    @endsection