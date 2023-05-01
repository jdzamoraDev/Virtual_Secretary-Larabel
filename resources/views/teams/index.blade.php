<!-- resources/views/teams/index.blade.php -->

<div class="container">
    <h1>Teams</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Games</th>
                <th>Stadium</th>
                <th>Time</th>
                <th>Price1</th>
                <th>Price2</th>
                <th>Price3</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->games }}</td>
                <td>{{ $team->stadium }}</td>
                <td>{{ $team->time }}</td>
                <td>{{ $team->price1 }}</td>
                <td>{{ $team->price2 }}</td>
                <td>{{ $team->price3 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>