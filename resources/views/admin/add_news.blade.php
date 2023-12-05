<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
    
    label
    {
        display: inline-block;
        width: 200px;
    }
    </style>

    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
 @include('admin.sidebar')

<!-- partial -->

@include('admin.navbar')

<!-- partial -->

<div class="container-fluid page-body-wrapper">

    <div class="container" align="center" style="padding-top:100px ">

        @if(session()->has('message'))

    <div class="alert alert-success">
    
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
    
            {{ session()->get('message') }}
    
    </div>
    
        @endif


<form action="store_news" method="POST" enctype="multipart/form-data">

    @csrf
   

<div style="padding:15px">
<label>Title</label>
<input type="text" style="color:black" name="title" placeholder="Write the title">
</div>

<div style="padding:15px">
    <label>News</label>
    <input type="msg" style="color:black" name="content" placeholder="Write the content">
</div>



 <div style="padding:15px">
            <label>News Image</label>
            <input type="file" name="file">
 </div>

 
 <div style="padding:15px">
    <input type="submit" class="btn btn-success">
</div>

</form>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>