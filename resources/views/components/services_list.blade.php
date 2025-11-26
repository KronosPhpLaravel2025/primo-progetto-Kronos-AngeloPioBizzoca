{{-- @foreach ($services as $service) 

    @php
        $icon = str_starts_with($service['icon'], 'http://') || str_starts_with($service['icon'], 'https://')
        ? $service['icon']
        : Storage::url($service['icon']);
    @endphp

    <li class="mb-3 d-flex justify-content-center">
    <div class="d-flex align-items-center gap-2">
        <a href="/detail/{{$service['key']}}" class="d-flex align-items-center gap-2 text-secondary text-decoration-none text-decoration-underline">
            <img src="{{$icon}}" alt="{{$service['name']}}" class="img-fluid" width="24" height="24">
            <span class="fw-light">{{$service['name']}}</span>
        </a>

        <form action="/delete-service/{{$service['key']}}" method="POST" class="ms-3">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-outline-secondary btn-sm">Delete service</button>
        </form>
    </div>
</li> --}}
<hr class="mt-2 mb-2">
@foreach ($services as $service) 
    <table class="table align-start text-center">  
        <tbody>
            @php
                $icon = str_starts_with($service['icon'], 'http://') || str_starts_with($service['icon'], 'https://')
                    ? $service['icon']
                    : Storage::url($service['icon']);
            @endphp
            <tr>
                <td class="text-secondary text-start">
                    {{$loop->iteration}}
                </td>
                <td class="px-3">
                    <a href="/detail/{{$service['key']}}" 
                       class="d-flex align-items-center justify-content-center gap-2 text-secondary text-decoration-none text-decoration-underline">
                        <img src="{{$icon}}" alt="{{$service['name']}}" width="24" height="24">
                        <span class="fw-light">{{$service['name']}}</span>
                    </a>
                </td>
                <td class="px-3" style="width: 150px;">
                    <form action="/delete-service/{{$service['key']}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary btn-sm w-100 fw-semibold">
                            Delete service
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endforeach
