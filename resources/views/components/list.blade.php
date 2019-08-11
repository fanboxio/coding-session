<table width="100%">
    <thead>
    <tr>
        <th>
            ID
        </th>
        <th>
            Name
        </th>
        <th>
            Options
        </th>
    </tr>
    </thead>

    <tbody>
    @foreach ($data as $item)
        <list-item :routePrefix="$route" :model="$item"></list-item>
    @endforeach
    </tbody>
</table>
