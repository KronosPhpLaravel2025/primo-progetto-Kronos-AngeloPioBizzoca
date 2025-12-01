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
<div class="table-responsive">
    <table class="table align-middle text-center">
        <tbody>
            @foreach ($services as $service)
                @php
                    $icon = str_starts_with($service['icon'], 'http://') || str_starts_with($service['icon'], 'https://')
                        ? $service['icon']
                        : Storage::url($service['icon']);
                @endphp
                <tr>
                    <td class="text-secondary text-start p-2 py-sm-3">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-2 px-sm-3">
                        <a href="/detail/{{ $service['key'] }}"
                           class="d-flex flex-column flex-sm-row align-items-center justify-content-center gap-1 gap-sm-2 text-secondary text-decoration-none text-decoration-underline">
                            <img src="{{ $icon }}" alt="{{ $service['name'] }}" width="24" height="24">
                            <span class="fw-light text-center text-sm-start">{{ $service['name'] }}</span>
                        </a>
                    </td>
                    <td class="px-2 px-sm-3" style="min-width:130px;">
                        <form action="/delete-service/{{ $service['key'] }}" method="POST" class="w-100">
                            @method('delete')
                            @csrf
                           
                            <button type="submit" class="btn btn-outline-secondary btn-sm w-100 fw-semibold">
                                Delete service
                            </button>
                        </form>
                        <a href="/edit-service/{{$service['key']}}" class="btn btn-outline-secondary btn-sm w-100 fw-semibold mt-2">
                                Edit service
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

