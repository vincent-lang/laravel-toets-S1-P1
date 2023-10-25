<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <h3>edit the person</h3>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form method="post" action="{{route('person.update', [$person->id])}}">
        @csrf
        @method('put')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{$person->name}}">

        <label for="street">Street:</label>
        <input type="text" name="street" value="{{$person->street}}">

        <label for="home_nr">Home nr:</label>
        <input type="text" name="home_nr" value="{{$person->home_nr}}">

        <label for="zipcode">Zipcode:</label>
        <input type="text" name="zipcode" value="{{$person->zipcode}}">

        <label for="city">City:</label>
        <input type="text" name="city" value="{{$person->city}}">

        <label for="phone_nr">Phone nr:</label>
        <input type="text" name="phone_nr" value="{{$person->phone_nr}}">

        <input type="submit" value="update the person">
    </form>
</body>

</html>