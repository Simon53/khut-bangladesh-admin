@extends('loginlayout.applogin')
@section('title', 'Admin::Login')



@section('content')
<div class="card-body px-5 py-5">
    <div class="text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="60">
        <h3 class="card-title mb-3">Login</h3>
    </div>
    <form action=" " class="loginForm">
        <div class="form-group">
            <label>Username *</label>
            <input required name="userName" type="text" class="form-control p_input">
        </div>
        <div class="form-group">
            <label>Password *</label>
            <input required name="passWord" value="" type="password" class="form-control p_input">
        </div>
        
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Login</button>
        </div>
    </form>
    </div>
@endsection




@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.19.0/js/md5.min.js"></script>
    <script type="text/javascript">
     /*  $('.loginForm').on('submit', function(event){
        event.preventDefault();
        // read by name attributes: userName and passWord in your form
        let userName = $('input[name="userName"]').val();
        let passWord = $('input[name="passWord"]').val();

        // send plain password to server (server will md5() it)
        let url = "/khut-bd-admin/public/onlogin";
        axios.post(url, {
            user: userName,
            pass: passWord
        }).then(function(response){
            if(response.status == 200 && response.data == 1){
                toastr.success("Login Success");
                window.location.href = '/khut-bd-admin/public/';
            } else {
                toastr.error("Login failed");
            }
        }).catch(function(error){
            toastr.error("Login failed");
        });
    });

  
    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "3000"
        };
    });*/
    
    
    
   $(document).ready(function(){

    // Toastr options
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000"
    };

    // Base path (adjust according to your server folder structure)
    const basePath = '/khut-bd-admin/public';

    // Login form submit
    $('.loginForm').on('submit', function(event){
        event.preventDefault();

        let userName = $('input[name="userName"]').val();
        let passWord = $('input[name="passWord"]').val();

        // POST login request
        axios.post(`${basePath}/onlogin`, {
            user: userName,
            pass: passWord
        })
        .then(function(response){
            if(response.status === 200 && response.data == 1){
                toastr.success("Login Success");

                // redirect to dashboard/home page
                window.location.href = `${basePath}/`;
            } else {
                toastr.error("Login failed");
            }
        })
        .catch(function(error){
            console.error(error); // optional for debugging
            toastr.error("Server error: " + (error.response?.data?.message || error.message));
        });
    });

});
    </script>
@endsection