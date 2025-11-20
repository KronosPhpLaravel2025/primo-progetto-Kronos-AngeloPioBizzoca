<x-main>
  <div class="d-flex justify-content-center align-items-center">
      <div class="d-flex flex-column align-items-center pt-5 pb-5" style="max-width: 800px;">
        <h2 class="mb-4 mt-4 text-center text-uppercase">Services list</h2>
        <ul class="list-unstyled w-100">
        
          <x-services_list :$services></x-services_list>
        </ul>
      </div>
    </div>
    <hr class="m-0 border-secondary"/>
</x-main>