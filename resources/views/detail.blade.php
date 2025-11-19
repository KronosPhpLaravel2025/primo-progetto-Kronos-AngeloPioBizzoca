<x-main>
  <x-navbar></x-navbar>
    <div class="container d-flex flex-column align-items-center py-5" style="max-width: 800px;">
      <h2 class="mb-3 text-center fw-semibold">{{$detail['name']}}</h2>
      <p class="text-center text-muted fs-5">{{$detail['description']}}</p>
    </div>
    <hr class="m-0 border-secondary">
  <x-footer></x-footer>
</x-main>