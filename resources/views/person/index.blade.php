<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Person list</h1>
    <h3>
        <a href="{{route('person.create')}}">create person info</a>
    </h3>
    <table border="1">
        <thead>
            <tr>
                <th>Name:</th>
                <th>Street:</th>
                <th>Home nr:</th>
                <th>Zipcode:</th>
                <th>City:</th>
                <th>Phone nr:</th>
                <th>Edit:</th>
                <th>Delete:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($persons as $person)
            <tr>
                <td>{{$person->name}}</td>
                <td>{{$person->street}}</td>
                <td>{{$person->home_nr}}</td>
                <td>{{$person->zipcode}}</td>
                <td>{{$person->city}}</td>
                <td>{{$person->phone_nr}}</td>
                <td>
                    <a href="{{route('person.edit', [$person->id])}}">edit</a>
                </td>
                <td>
                    <a href="{{route('person.delete', [$person->id])}}">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>