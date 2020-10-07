@foreach($updates->sortByDesc('created_at')->take(1) as $update)
<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header text-center bg-danger" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ $update->title }}
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="d-flex justify-content-center">
                <img src="/images/safer-studio-logo.jpg" alt="" style="max-height: 175px;">
            </div>
            <div class="card-body">
                @can('update', \App\Update::class)
                    <div class="text-center bg-mdu-yellow">
                        <a href="/updates/create">New Policy</a>
                        &#160;
                        &middot;
                        &#160;
                        <a href="/updates/{{ $update->id }}/edit">Edit Current Policy</a>
                    </div>
                @endcan
                {{-- start message here --}}

                {!! $update->description !!}

                {{-- end message here --}}
                <hr>
                <br>
                <a href="/saferstudiopolicy/archive" class="text-center">Safer Studio Policy Archive</a>
            </div>
        </div>
    </div>
</div>
@endforeach
