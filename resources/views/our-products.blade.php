<x-main>
  <div class="text-center pt-5 mb-4">
    <h3 class="fw-bold text-uppercase pb-1 d-inline-block border-bottom border-secondary">
      A little overview of our products
    </h3>
  </div>
  <div class="container py-5">
    <div class="row justify-content-center g-4">
      @foreach ($services as $service)
       
        @php
          $image = str_starts_with($service['image'], 'http://') || str_starts_with($service['image'], 'https://')
          ? $service['image']
          : Storage::url($service['image']);
        @endphp
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex">
        <div class="card border rounded-3 p-3 d-flex flex-column h-100 w-100">
          <img src="{{$image}}"
               class="card-img-top rounded"
               style="height: 160px; object-fit: cover;" />
          <div class="card-body text-center d-flex flex-column mt-2">
            <h5 class="card-title mb-2">{{$service['name']}}</h5>
            <p class="card-text mb-3 flex-grow-1">
           {{$service['description']}}
            </p>
            <a href="show-detail-product/{{$service['key']}}" class="btn btn-outline-secondary w-100 mt-auto">Go to details</a>
          </div>
        </div>
      </div>
     @endforeach
    </div>
  </div>
  <hr class="m-0 border-secondary" />
</x-main>
