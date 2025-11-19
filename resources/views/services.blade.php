<x-main>
  <div class="d-flex justify-content-center align-items-center">
      <div class="d-flex flex-column align-items-center pt-5 pb-5" style="max-width: 800px;">
        <h2 class="mb-4 mt-4 text-center text-uppercase">Services list</h2>
        <ul class="list-unstyled w-100">
          @foreach ($services as $service) 
           <li class="mb-3 d-flex justify-content-center">
            <a href="/detail/{{$service['key']}}" class="d-flex align-items-center gap-2 text-secondary text-decoration-none text-decoration-underline"><img src="{{$service['icon']}}" alt="{{$service['name']}}" class="img-fluid" width="24" height="24">
              <span class="fw-light">{{$service['name']}}</span></a>
            </li>
          @endforeach 
        </ul>
      </div>
    </div>
    <hr class="m-0 border-secondary"/>
</x-main>