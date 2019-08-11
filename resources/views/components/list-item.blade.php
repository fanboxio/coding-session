<tr>
    <td>
        {{ $model->id }}
    </td>
    <td>
        <a href="{{ route($routePrefix . '.show', $model->id) }}">#{{ $model->id }}: {{ $model->name }}</a>
    </td>
    <td>
        <a href="{{ route($routePrefix . '.edit', $model->id) }}">Edit</a>
        <form method="post" action="{{ route($routePrefix . '.destroy', $model->id) }}">

            {{ csrf_field() }}
            @method('DELETE	')

            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
