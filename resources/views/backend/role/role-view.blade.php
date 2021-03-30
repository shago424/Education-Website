@extends('backend.layouts.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Role</h1>
          </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Role</li>
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
          <section class="col-md-12">
           
           <div class="card">
              <div class="card-header" style="background-color:  #1e8449;color: white ">
                <h5>Role List
                  <a  href="{{route('roles.add')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-plus-circle"> Add Role</i></a>
                </h5>
              </div> 
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                   <tr style="background-color: #641e16;color: white">
                    <th width="5%">SL</th>
                    <th width="5%">ID</th>
                    <th width="15%">Role Name</th>
                    <th width="65$">Permissions</th>
                    <th width="10%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($roles as $key => $role)
                    <tr style="background-color:   #d2d6c7;border: 2px">
                      <td>{{$key+1}}</td>
                      <td>{{$role->id}}</td>
                      <td>{{$role->name}}</td>
                      <td>
                        @foreach($role->permissions as $permi)
                       <span class="badge badge-primary mr-2"> 
                        {{$permi->name}}
                       </span>
                        @endforeach
                      </td>
                      <td>
                    <a title="Edit" href="{{route('roles.edit',$role->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a title="Delete" id="delete" href="{{route('roles.delete',$role->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td> 
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            <!-- /.card -->
          </section>
           <!--<section class="col-md-5">
           
           <div class="card">
              <div class="card-header" style="background-color:  #3c4897 ;color: white">
                <h5>Add Role
                  <a  href="{{route('roles.view')}}" class="btn btn-success btn-sm float-right"><i class="fa fa-list"> Role List</i></a>
                </h5>
              </div> 
            <div class="card-body">
                
              <form method="post" action="{{route('roles.store')}}" id="myform">
                @csrf
                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                      <font style="color:red">{{($errors)->has('name')?($errors->first('name')):''}}</font>
                  </div>
                    <div class="form-group col-md-12">
                    
                <input type="submit" value=" Add Role" name="submit" class="btn btn-primary" >
                  </div>
                </div> 
              </form>

                </div>
              </div>
           
            -->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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
        required: "Please enter Name",
        
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
  <!-- /.content-wrapper -->
  @endsection