@extends('layout')

@section('content')
<div class="container">
    <div class="text-center">
    <h1>projects</h1>

    @foreach ($words as $word)
        @if ($word->id == 1)
        <ul>
            {{ $word->clue1 }}
            {{ $word->word }} 
        </ul>
        @endif
        
        <script>
            var secondsleft = 10;
            var interval = setInterval(function(){
                document.getElementById('timer_div').innerHTML = --secondsleft;

                if(secondsleft =< 0){
                    
                }
            },1000)
        </script>

        </ul>        
    @endforeach
    @endsection
    </div>
</div>