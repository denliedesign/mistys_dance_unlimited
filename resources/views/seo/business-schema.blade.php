@php
    // Class times and the Boys & Girls Club's hours are not office hours.
    $business = [
        '@context' => 'https://schema.org',
        '@type' => ['LocalBusiness', 'EducationalOrganization'],
        '@id' => 'https://mistysdance.com/#organization',
        'name' => "Misty's Dance Unlimited",
        'url' => 'https://mistysdance.com/',
        'telephone' => '+1-608-779-4642',
        'email' => 'info@mistysdance.com',
        'openingHoursSpecification' => array_map(function ($hours) {
            return [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => 'https://schema.org/'.$hours['day'],
                'opens' => $hours['opens'],
                'closes' => $hours['closes'],
            ];
        }, config('seo.office_hours')),
        'image' => 'https://mistysdance.com/images-mist/header.jpg',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '923 12th Ave S, Suite 103',
            'addressLocality' => 'Onalaska',
            'addressRegion' => 'WI',
            'postalCode' => '54650',
            'addressCountry' => 'US',
        ],
        'areaServed' => ['Onalaska, WI', 'Holmen, WI', 'La Crosse, WI', 'West Salem, WI', 'La Crescent, MN'],
        'location' => [
            ['@type' => 'Place', 'name' => 'MDU Onalaska', 'address' => '923 12th Ave S, Suite 103, Onalaska, WI 54650'],
            ['@type' => 'Place', 'name' => 'MDU Holmen at the Holmen Boys & Girls Club', 'address' => [
                '@type' => 'PostalAddress', 'streetAddress' => '600 Holmen Dr N',
                'addressLocality' => 'Holmen', 'addressRegion' => 'WI', 'postalCode' => '54636', 'addressCountry' => 'US',
            ]],
        ],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($business, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) !!}</script>
