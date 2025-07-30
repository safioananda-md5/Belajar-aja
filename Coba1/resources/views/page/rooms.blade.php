<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="row">
        <div class="col-8 d-grid gap-3">
            @foreach ($rooms as $room)
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room['name'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><a href=""
                                class="text-muted">{{ $room['phone'] }}</a> | {{ $room['address'] }} </h6>
                        <p class="card-text">{{ $room['description'] }}</p>
                        <a href="/booking/{{ Crypt::encryptString(1) }}">Pesan Sekarang &raquo;</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
