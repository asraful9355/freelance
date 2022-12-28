<!doctype html>
<html lang="en">
<head>
<title>:: HexaBit :: Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/asset/toastr/toastr.min.css ') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts-c3/plugin.css')}}"/>
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/chartist/css/chartist.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/toastr/toastr.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/asset/summernote/summernote-bs4.css ') }}">


<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/color_skins.css')}}">
 <!-- Toastr css -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('backend/assets/images/icon-light.svg')}}" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

     
   @include('backend.body.header')
     
   @include('backend.body.sidebar')

   @yield('content')
    
</div>

<!-- Javascript -->
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{ asset('backend/assets/bundles/c3.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/chartist.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/vendor/toastr/toastr.js')}}"></script>

<script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/js/index.js')}}"></script>
<script src="{{ asset('backend/asset/summernote/summernote-bs4.js ') }}"></script>
 <!-- Toastr js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <!-- all toastr message show  Update-->
 <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
    }
    @endif
</script>
<!-- all toastr message show  old-->
<script type="text/javascript">
    @if(Session::has('success'))
      toastr.success("{{Session::get('success')}}");
    @endif
    @if(Session::has('info'))
      toastr.info("{{Session::get('info')}}");
    @endif
    @if(Session::has('warning'))
      toastr.warning("{{Session::get('warning')}}");
    @endif
    @if(Session::has('error'))
      toastr.info("{{Session::get('error')}}");
    @endif
    @if(Session::has('danger'))
      toastr.danger("{{Session::get('danger')}}");
    @endif
</script>

<!-- sweetalerat link -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- sweetalerat delete data -->
<script type="text/javascript">
$(function(){
  $(document).on('click','#delete',function(e){
    e.preventDefault();
    var link = $(this).attr("href");
  Swal.fire({
  title: 'Are you sure?',
  text: "Delete This Data!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = link
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
  });
});
</script>


        
</body>
</html>
