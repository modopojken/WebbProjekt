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
            <input type="text" name="word" placeholder="Word title">
        </div>
        <div>
            <textarea name="clue1" placeholder="Words Clue1"></textarea>
        </div>
        <div>
            <textarea name="clue2" placeholder="Words Clue1"></textarea>
        </div>
        <div>
            <textarea name="clue3" placeholder="Words Clue1"></textarea>
        </div>
        <div>
            <textarea name="clue4" placeholder="Words Clue1"></textarea>
        </div>
        <div>
            <textarea name="clue5" placeholder="Words Clue1"></textarea>
        </div>
        <div>
            <button type="submit">Create Words</button>
        </div>
    </form>

</body>
</html>