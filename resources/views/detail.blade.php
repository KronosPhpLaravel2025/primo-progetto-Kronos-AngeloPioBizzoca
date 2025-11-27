<x-main>
  <div class="container py-5" style="max-width: 800px;">
    <div class="row align-items-center gy-4">
      <div class="col-12 col-md-4 text-center">
        <img src="" alt="" class="img-fluid rounded">
      </div>
      <div class="col-12 col-md-8 text-start">
        <h2 class="mb-3 fw-semibold border-bottom border-secondary">
          {{$detail['name']}}
        </h2>
        <p class="text-muted fs-5">
          {{$detail['description']}}
        </p>
      </div>
    </div>
  </div>
  <hr class="m-0 border-secondary">
</x-main>
