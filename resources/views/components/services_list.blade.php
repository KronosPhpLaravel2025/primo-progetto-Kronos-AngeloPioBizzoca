@foreach ($services as $service) 
    <li class="mb-3 d-flex justify-content-center">
     <a href="/detail/{{$service['key']}}" class="d-flex align-items-center gap-2 text-secondary text-decoration-none text-decoration-underline"><img src="{{$service['icon']}}" alt="{{$service['name']}}" class="img-fluid" width="24" height="24">
     <span class="fw-light">{{$service['name']}}</span></a>
    </li>
@endforeach 