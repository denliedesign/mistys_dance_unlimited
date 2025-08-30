<div class="row">
    <div class="col-2 d-flex align-items-end" style="font-family: 'Pacifico', cursive; font-size: 50px;">{{ $community->day }}</div>
    <div class="col-10 d-flex align-items-end">
        <p>{{ $community->program }}
            <br>{{ $community->time }}
            @if($community->teacher)<br>{{ $community->teacher }}@endif
            @if($community->url)<br><a href="{{ $community->url }}" target="_blank">{{ $community->button }}</a>@endif
        </p>
    </div>
</div>
@can('update', \App\Community::class)
    <div class="card-footer">
        <div class="admin-controls d-flex justify-content-center align-items-center pb-2">
            <div><a href="/communities/{{ $community->id }}/edit">Edit Program</a></div>
            <div>
                <form action="/communities/{{ $community->id }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger ml-4" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endcan
<hr>
