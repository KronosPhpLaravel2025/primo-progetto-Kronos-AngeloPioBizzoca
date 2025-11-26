<x-main>
  <div class="d-flex justify-content-center align-items-center">
    <div class="pt-5 pb-5" style="max-width: 500px; width: 100%;">
      <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
        <h2 class="m-0 text-uppercase">Services list</h2>
        <a href="/create" class="btn btn-outline-secondary fw-semibold">
          Create a new service
        </a>
      </div>
      <ul class="list-unstyled w-100">
      <x-services_list :$services></x-services_list>
      </ul>
    </div>
  </div>
  <hr class="m-0 border-secondary"/>
</x-main>