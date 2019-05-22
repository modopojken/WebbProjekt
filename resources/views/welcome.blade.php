@extends('layout')
@section('content')
    <div class="container text-center">
        <a class="knapp" href="/words">Spela spelet</a> <!-- Tar dig till spelet (/words) -->
    </div>
    <div class="container text-center">
        <a class="button" href="/words/create">Lägg till fler ord i databasen!</a> <!-- Tar dig til create (/words/create) -->
    </div>

    <div  id='target' style='display:none;'>This div will appear after 1 seconds  of page load</div> <!-- Värdelöst men jag årkar inte ta bort för att detta är nice -->
        <script>
           $(function(){
                setTimeout(function(){ showTarget(); }, 1000);
           });
           function showTarget(){
               $("#target").show();
           }
        </script>

@endsection