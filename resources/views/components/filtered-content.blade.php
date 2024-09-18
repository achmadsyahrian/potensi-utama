@props(['content', 'class' => ''])

@php
    // Proses untuk membersihkan dan membatasi konten
    $filteredContent = preg_replace('/<figure[^>]*>.*?<\/figure>/is', '', $content);
    $filteredContent = preg_replace('/<img[^>]*>/i', '', $filteredContent);
    $filteredContent = preg_replace('/<span[^>]*>.*?<\/span>/is', '', $filteredContent);
    $filteredContent = strip_tags($filteredContent, '<p>');
    $limitedContent = \Illuminate\Support\Str::limit($filteredContent, 200, '...');
@endphp

<div class="content {{ $class }}">
    {!! $limitedContent !!}
</div>