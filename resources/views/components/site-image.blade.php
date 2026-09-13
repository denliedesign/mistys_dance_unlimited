@props(['src', 'width', 'height', 'sizes' => '100vw', 'loading' => 'lazy'])
@php
    // Optimized legacy files remain fallbacks; browsers select the matching WebP size.
    $base = preg_replace('/\.[^.]+$/', '', $src);
    $webp = $base . '.webp';
    $candidates = [];
    foreach ([320, 480, 500, 640, 800, 960, 1200, 1575] as $candidateWidth) {
        $candidate = $base . '-' . $candidateWidth . '.webp';
        if (is_file(public_path($candidate))) {
            $candidates[] = $candidate . ' ' . $candidateWidth . 'w';
        }
    }
@endphp
<picture style="display: contents;">
    @if(count($candidates))
        <source type="image/webp" srcset="{{ implode(', ', $candidates) }}" sizes="{{ $sizes }}">
    @elseif(is_file(public_path($webp)))
        <source type="image/webp" srcset="{{ $webp }}">
    @endif
    <img src="{{ $src }}" width="{{ $width }}" height="{{ $height }}" loading="{{ $loading }}" decoding="async" {{ $attributes }}>
</picture>
