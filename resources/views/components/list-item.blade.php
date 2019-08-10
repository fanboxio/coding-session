<tr>
    <td>
        {{ $model->id }}
    </td>
    <td>
        <a href="{{ route($route, $model->id) }}">#{{ $model->id }}: {{ $model->name }}</a>
    </td>
</tr>
