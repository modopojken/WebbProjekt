<!-- /resources/views/alert.blade.php -->

<div class="alert alert-danger">
        <div class="alert-title">{{ $title }}</div> <!-- nå skit vette fan, hör till composer saken som jag la ner med.  -->
    
        {{ $slot }}
    </div>