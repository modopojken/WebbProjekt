@extends('layout')
@section('content')
    <div class="container text-center">
        <a class="knapp" href="/words">Spela spelet</a>
    </div>

    <div  id='target' style='display:none;'>This div will appear after 1 seconds  of page load</div>
        <script>
           $(function(){
                setTimeout(function(){ showTarget(); }, 1000);
           });
           function showTarget(){
               $("#target").show();
           }
        </script>

@endsection