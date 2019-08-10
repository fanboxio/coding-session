<table width="100%">
    <thead>
    <tr>
        <th>
            ID
        </th>
        <th>
            Name
        </th>
    </tr>
    </thead>

    <tbody>
    @foreach ($data as $item)
        <list-item :route="$route" :model="$item"></list-item>
    @endforeach
    </tbody>
</table>
