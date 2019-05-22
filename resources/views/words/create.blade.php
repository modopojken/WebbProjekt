<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1></h1>

    <form method="POST" action="/words">
        {{ csrf_field() }}
        <div>
            <input type="text" name="word" placeholder="Order man ska gissa till">
        </div>
        <div>
            <textarea name="clue1" placeholder="Ledtråd 1"></textarea> <!-- Här så har jag alla input och text ytor för att få in nya ledtrådar till databasen -->
        </div>
        <div>
            <textarea name="clue2" placeholder="Ledtråd 2"></textarea>
        </div>
        <div>
            <textarea name="clue3" placeholder="Ledtråd 3"></textarea>
        </div>
        <div>
            <textarea name="clue4" placeholder="Ledtråd 4"></textarea>
        </div>
        <div>
            <textarea name="clue5" placeholder="Ledtråd 5"></textarea>
        </div>
        <div>
            <button type="submit">Skapa gissnings sats</button>
        </div>
    </form>

</body>
</html>