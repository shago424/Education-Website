@extends('backend.layouts.master')
@section('content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage User</h1>
          </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h5>User List
                  <a  href="{{route('userss.add')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-plus-circle"> Add User</i></a>
                </h5>
              </div> 
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                   <tr style="background-color: #641e16;color: white">
                    <th>SL</th>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Role Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($userss as $key => $users)
                    <tr style="background-color:   #d2d6c7;border: 2px">
                      <td>{{$key+1}}</td>
                      <td>{{$users->id}}</td>
                      <td>{{$users->name}}</td>
                      <td>
                        @foreach($users->roles as $role)
                         <span class="badge badge-primary mr-2"> 
                        {{$role->name}}
                       </span>
                        @endforeach
                      </td>
                      <td>{{$users->email}}</td>
                      <td>{{$users->mobile}}</td>
                      <td style="text-align: center;"><img style="width: 40px;height: 50px" class="profile-user-img img-fluid img-circle"
                       src="{{(!empty($user->image))?url('upload/logoimage/'.$user->image):url('public/upload/usernoimage.png')}}"
                       alt="user profile picture"></td>
                      <td>
                    <a title="Edit" href="{{route('userss.edit',$users->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a title="Delete" id="delete" href="{{route('userss.delete',$users->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                      </td> 
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            <!-- /.card -->
          </section>
           
          
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