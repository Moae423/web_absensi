@foreach ($absensis as $item)
    <div class="font-satoshi py-8">
        <div class="rounded-xl bg-darkBlue text-white max-w-2xl mx-auto shadow-xl">
            <div class="card-body">
                <div class="title flex justify-between">
                    <h2 class="text-3xl font-semibold">{{ $item->title }}</h2>
                    <div class="jam_masuk">
                        <button
                            class="btn btn-warning cursor-default">{{ \Carbon\Carbon::parse($item->start_time)->format('H:i') }}
                        </button>
                        <button
                            class="btn btn-error cursor-default">{{ \Carbon\Carbon::parse($item->end_time)->format('H:i') }}
                        </button>
                    </div>
                </div>
                <p class="font-light text-xl my-4">{{ $item->description }}</p>
                <button class="btn btn-info text-xl">QR Code</button>
                <button class="btn btn-success text-xl">Attendance</button>
            </div>
        </div>
@endforeach

</div>
