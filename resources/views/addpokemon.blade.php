<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/test" method="post">
        @csrf
        Nom : <input type="text" name="nom">
        Niveau : <input type="text" name="niveau">
        type : <input type="text" name="type">


        <button type="submit">add</button>
    </form>

</body>
</html>