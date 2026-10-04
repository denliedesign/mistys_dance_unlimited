<details class="mt-3">
    <summary>Onalaska office &amp; phone hours</summary>
    <dl class="small">
        @foreach(config('seo.office_hours') as $hours)
            <dt>{{ $hours['day'] }}</dt><dd>{{ $hours['label'] }}</dd>
        @endforeach
    </dl>
</details>
