<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>HP</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($people as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->address }}</td>
        </tr>
        @endforeach
    </tbody>
</table>