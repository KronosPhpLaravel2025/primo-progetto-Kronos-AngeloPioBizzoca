<x-main>
  <section class="d-flex align-items-center justify-content-center pt-3 bg-light">
    <div class="container px-3 px-md-5 text-center text-md-start">
      <div class="mx-auto" style="max-width: 800px;">
        <h1 class="mb-4 text-uppercase border-bottom border-secondary fw-bold text-center fs-2">YOU ARE READING: {{$service['name']}}</h1>
        <p class="lead fs-5 text-center">
         {{$service['description']}}
        </p>
      </div>
    </div>
  </section>
  <hr class="m-0 border-secondary" />
</x-main>