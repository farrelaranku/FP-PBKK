<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">


@foreach ($news as $item)
    


        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              
                <img src="newsimage/{{$item->image}}" alt="">
              
            </div>
            <div class="body">
              <h5 class="post-title">
                {{-- <a href="blog-details.html"> --}}
                  {{$item->title}}
                {{-- </a> --}}
                </h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>TCare Hospital</span>
                </div>
                <span class="mai-time"></span> {{$item->created_at}}
              </div>
            </div>
          </div>
        </div>

        @endforeach

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->