<!-- card -->
<div class="col my-3">
    <div class="card" style="border: none;">
        <div class="d-flex justify-content-center align-items-center" style="height: 126px; width: auto;">
            <img src="/images-lava/{{ $logo }}" alt="logo" style="width: auto; max-height: 100%; max-width: 100%;">
        </div>
        <div class="card-body pb-0">
            <h5 class="card-title font-staat" style="font-size: 1.5em;">{{ $what }}</h5>
            <p style="font-size: 0.9em;" class="card-text font-syne pb-0 mb-0"><strong>Ages:</strong> {{$who}}<br><strong>Date:</strong> {!! $when !!}<br><strong>Tuition:</strong> {{ $tuition }}</p>
        </div>
        <div class="card-footer" style="background: none; border-top: none;">
            <p style="font-size: 0.9em;" class="card-text font-syne">
                <small class="text-muted">
                    {!! $why !!}
                </small>
            </p>
        </div>
    </div>
</div>
<!-- end card -->
