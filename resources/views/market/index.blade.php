    <div class="container">
        <h1>Market</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Article</th>
                    <th>Size</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($marketItems as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->article }}</td>
                    <td>{{ $item->size }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>