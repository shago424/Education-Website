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
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Add</li>
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
       <section class="col-md-8 offset-md-2">
           
           <div class="card">
              <div class="card-header" style="background-color: green;color: white">
                <h5>Update User
                  <a  href="{{route('userss.view')}}" class="btn btn-warning btn-sm float-right"><i class="fa fa-list"> User List</i></a>
                </h5>
              </div> 
            <div class="card-body">
                
              <form method="post" action="{{route('userss.update',$userss->id)}}" id="myform">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{$userss->name}}">
                    <font style="color:red">{{($errors)->has('name')?($errors->first('name')):''}}</font>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{$userss->email}}">
                    <font style="color:red">{{($errors)->has('email')?($errors->first('email')):''}}</font>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Mobile</label>
                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number"  value="{{$userss->mobile}}">
                  </div>

                   <div class="form-group col-md-6">
                    <label for="name">Address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address"value="{{$userss->address}}">
                  </div>

                   <div class="form-group col-md-6">
                    <label for="name">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                  </div>

                   <div class="form-group col-md-6">
                    <label for="name">Confirm Password</label>
                    <input type="cpassword" name="cpassword" id="cpassword" class="form-control" placeholder="Enter Confirm Password">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="role">User Role</label>
                    <select name="roles[]" id="roles" class="form-control selcet2" multiple>
                    @foreach($roles as $role)
                    <option value="{{$role->id}}" {{$userss->hasRole($role->name) ? 'selected' :''}}>{{$role->name}}</option>
                    @endforeach
                    </select>
                  </div>

                  

              
                    <div class="form-group col-md-12">
                    
                <input type="submit" value=" Upadte User" name="submit" class="btn btn-primary btn-block float-right" >
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
  

<script type="text/javascript">
  
  $(document).ready(function() {
    $('.select2').select2();
});
</script>

<script>
$(function () {
  
  $('#myform').validate({
    rules: {
      name: {
        required: true,
        
      },
      'roles[]': {
        required: true,
        
      },
      mobile: {
        required: true,
        
      },
       
      address: {
      required: true,
        
      },


      email: {
        required: true,
        email: true
       
      },
      password: {
         
        minlength: 6
      },
      cpassword: {
      equalTo:'#password'
        
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
        
      },

      name: {
        required: "Please enter Name",
        
      },
      
      password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long"
      },

      cpassword: {
        
        equalTo:"Confirm password Does Not Match",
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