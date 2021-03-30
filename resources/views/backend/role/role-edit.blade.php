@extends('backend.layouts.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('roles.view')}}">Role List</a></li>
              <li class="breadcrumb-item"><a href="{{route('roles.add')}}">Add Role</a></li>
              <li class="breadcrumb-item active">Edit Role</li>
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
       <section class="col-md-10 offset-md-1">
           
           <div class="card">
              <div class="card-header" style="background-color:  #3c4897 ;color: white">
                <h5>Edit Role
                  <a  href="{{route('roles.view')}}" class="btn btn-success btn-sm float-right"><i class="fa fa-list"> Role List</i></a>
                </h5>
              </div> 
            <div class="card-body">
                
               <form method="post" action="{{route('roles.update',$role->id)}}" id="myform">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="name"> Role Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name"value="{{$role->name}}">
                      <font style="color:red">{{($errors)->has('name')?($errors->first('name')):''}}</font>
                   </div>
                    <div class="form-group">
                    <label for="name">Permissions</label>
                    @foreach($permissions as $permission)
                     <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="permissions[]" {{$role->haspermissionTo($permission->name) ? 'checked' :''}} id="checkpermission{{$permission->id}}" value="{{$permission->name}}">
                          <label for="checkpermission{{$permission->id}}" class="custom-control-label">{{$permission->name}}</label>
                        </div>
                         @endforeach
                  </div>
                    <div class="form-group col-md-12">
                <input type="submit" value=" Update Role" name="submit" class="btn btn-primary" >
                  </div>
                </div> 
              </form>

                </div>
              </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<script>
$(function () {
  
  $('#myform').validate({
    rules: {

      role: {
      required: true,
        
      },
      name: {
        required: true,
        
      },
      mobile: {
        required: true,
        
      },
      gender: {
        required: true,
        
      },
       
      address: {
      required: true,
        
      },


      email: {
        required: true,
        email: true
       
    
        
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
        
      },

      name: {
        required: "Please Enter Role Name",
        
      }
      
      
   
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
  @endsection