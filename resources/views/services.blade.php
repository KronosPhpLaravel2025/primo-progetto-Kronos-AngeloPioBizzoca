<x-main>
  <div class="d-flex justify-content-center align-items-center px-3">
    <div class="pt-5 pb-5 mx-auto" style="max-width: 600px; width: 100%;">
      <div class="row justify-content-between align-items-center mb-4 mt-4 g-2">
        <div class="col-12 col-md-6 text-center text-md-start">
          <h2 class="m-0 text-uppercase fw-bold ">Services list</h2>
        </div>
        <div class="col-12 col-md-6 text-center text-md-end">
          <a href="/create" class="btn btn-outline-secondary fw-semibold border-bottom border-secondary w-100 w-md-auto">
            Create a new service
          </a>
        </div>
      </div>
      <ul class="list-unstyled w-100">
        <x-services_list :$services></x-services_list>
      </ul>
    </div>
  </div>
  <hr class="m-0 border-secondary"/>
</x-main>
