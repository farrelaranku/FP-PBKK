
<div class="main-panel">
    <div class="content-wrapper">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
       
    </form>
     @include('admin.doctor')
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>