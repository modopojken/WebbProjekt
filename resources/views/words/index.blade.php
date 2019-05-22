@extends('layout')


@section('content')
<div class="container">
    <div class="text-center">
        <h1>Välkommen till nästa fråga!</h1>

       <div id="firstGame" style="">
        <div style="display:none;">
           @foreach ($words as $word)
               
                @if($word->id == 2)
                    <p id="rightAnswer">{{ $word->word }}</p>
                @endif
           @endforeach
        </div>

        
        <h3>Endast små bokstäver</h3>
        <br>
        <input type="text" name="answer" id="answer"> <!-- Inputen som tar ditt svar och kör den genom javascript koden -->
        <br>
        <button id="answerButton">Click to answer</button> <!-- knapp som "submittar ditt svar" -->



        @foreach ($words as $word) <!-- Här sätter vi ID så att vi får en fråga från databasen och sedan displayar vi ledtrådar. Bärjar med en
        sedan så kommer nästa upp om du gissar fel -->
            @if ($word->id == 2)
                <div id="firstClue" style="">
                    {{ $word->clue1 }}
                </div>
                <div id="secondClue" style="display:none;">
                    {{ $word->clue2 }}
                </div>
                <div  id="thirdClue" style="display:none;">
                    {{ $word->clue3 }}
                </div>
                <div id="fourthClue" style="display:none;">
                    {{ $word->clue4 }}
                </div>
                <div id="fifthClue" style="display:none;">
                    {{ $word->clue5 }}
                </div>

        @endif

        @endforeach
        @foreach( $words as $word )
            @if("answer" == "rightAnswer"){

            }
            @endif
        @endforeach
        </div>

        <p id="youreRight" style="display:none;">Du gissade Rätt!!</p>
        <p id="youreWrong" style="display:none;">Du gissade FEL! 😠</p>

    </div>
</div>

<script src="/js/game.js"></script>
@endsection
