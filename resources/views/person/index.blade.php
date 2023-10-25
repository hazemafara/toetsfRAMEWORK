<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persons</title> <!-- Update the title -->
</head>

<body>
    <h1>Persons</h1> <!-- Update the heading -->
    <div>
        @if(session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{ route('person.create') }}">Create a Person</a> <!-- Update the route -->
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Street</th>
                <th>Home Number</th>
                <th>Zipcode</th>
                <th>City</th>
                <th>Phone Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($persons as $person) <!-- Update the variable name -->
            <tr>
                <td>{{ $person->id }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->street }}</td>
                <td>{{ $person->home_nr }}</td>
                <td>{{ $person->zipcode }}</td>
                <td>{{ $person->city }}</td>
                <td>{{ $person->phone_nr }}</td>
                <td>
                    <a href="{{ route('person.edit', ['person' => $person]) }}">Edit</a> <!-- Update the route name -->
                </td>
                <td>
                    <form method="post" action="{{ route('person.destroy', ['person' => $person]) }}"> <!-- Update the route name -->
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>