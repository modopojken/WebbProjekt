@extends('layout')


@section('content')
<div class="container">
    <div class="text-center">
        <h1>Gissa endast med små bokstäver!</h1>

       <div style="display:none;">
           @foreach ($words as $word)
               
                @if($word->id == 1)
                    <p id="rightAnswer">{{ $word->word }}</p>
                @endif
           @endforeach
        </div>

        
        <input type="text" name="answer" id="answer">
        

        <button id="answerButton">Click to answer</button>



        @foreach ($words as $word)
            @if ($word->id == 3)
            <div>
                {{ $word->clue1 }}
            </div>
                @component('words.alert')
                    @slot('title')
                        {{ $word->clue3 }}
                    @endslot
                @endcomponent


            <div  id='clue2' style='display:none;'>
                    {{ $word->clue2 }}
            </div>
            <script>
            function showClue2(){
                $("#clue2").show();
            }
                setTimeout(function(){ showClue2(); }, 10000);
            </script>

            <div  id='clue3' style='display:none;'>
                    {{ $word->clue3 }}
            </div>
            <script>
            function showClue3(){
                $("#clue3").show();
            }
                setTimeout(function(){ showClue3(); }, 20000);
            </script>

            <div  id='clue4' style='display:none;'>
                    {{ $word->clue4 }}
            </div>
            <script>
            function showClue4(){
                $("#clue4").show();
            }
                setTimeout(function(){ showClue4(); }, 30000);
            </script>

            <div  id='clue5' style='display:none;'>
                    {{ $word->clue5 }}
            </div>
            <script>
            function showClue5(){
                $("#clue5").show();
            }
                setTimeout(function(){ showClue5(); }, 40000);
            </script>

        @endif
        @endforeach

        <p id="youreRight" style="display:none;">Du gissade Rätt!!</p>
        <p id="youreWrong" style="display:none;">Du gissade FEL! 😠</p>


        <!--
        <p id="randomId"></p>

        <script>

        document.getElementById("randomId").innerHTML =
        Math.floor(Math.random() * 3 + 1);

        </script>

        

        <div style="">
            <div>
                @foreach ($words as $word)
                @if ($word->id == 2) 
                <div>
                    {{ $word->clue1 }}
                </div>
                @endif
                @endforeach
            </div>
        </div>
    -->
    </div>
</div>

<script src="/js/game.js"></script>
@endsection
