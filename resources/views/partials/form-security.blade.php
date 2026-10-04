@php($guardId = 'form-guard-' . \Illuminate\Support\Str::uuid())
<div aria-hidden="true" style="position:absolute;left:-10000px;width:1px;height:1px;overflow:hidden;">
    <label for="{{ $guardId }}">Leave this field empty</label>
    <input type="text" id="{{ $guardId }}" name="contact_website" value="" tabindex="-1" autocomplete="off">
</div>
<input type="hidden" name="_form_guard" value="{{ \App\Support\FormSecurity::issue() }}">
@foreach(['form_security', 'contact_website', '_form_guard', 'cf-turnstile-response'] as $securityError)
    @error($securityError)
        <p class="text-danger" role="alert">{{ $message }}</p>
    @enderror
@endforeach
@if(config('form_security.turnstile_enabled'))
    @if(config('form_security.site_key'))
        <div class="cf-turnstile my-3" data-sitekey="{{ config('form_security.site_key') }}" data-action="site_form" data-size="flexible"></div>
        @once
            <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
        @endonce
        <noscript><p role="alert">Please enable JavaScript to complete verification, or call 608-779-4642.</p></noscript>
    @else
        <p role="alert">Verification is temporarily unavailable. Please call 608-779-4642 for help.</p>
    @endif
@endif
