<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <h3>New person</h3>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form method="post" action="{{route('person.store')}}">
        @csrf
        @method('post')

        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="street">Street:</label>
        <input type="text" name="street">

        <label for="home_nr">Home nr:</label>
        <input type="text" name="home_nr">

        <label for="zipcode">Zipcode:</label>
        <input type="text" name="zipcode">

        <label for="city">City:</label>
        <input type="text" name="city">

        <label for="phone_nr">Phone nr:</label>
        <input type="text" name="phone_nr">

        <input type="submit" value="save new person">
    </form>
</body>

</html>