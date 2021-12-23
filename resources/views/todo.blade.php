<a href="{{ route('todo.create')}}">追加画面</a>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Todoのタイトル</th>
    <th>Todoの詳細</th>
    <th>編集</th>
  </tr>
  @foreach($todos as $todo)
  <tr>
    <td>{{ $todo->id }}</td>
    <td>{!! nl2br(e($todo->title)) !!}</td>
    <td>{{ $todo->detail }}</td>
    <td><a href="{{ route('todo.edit', $todo->id) }}">編集</a></td>
  </tr>
  @endforeach
</table>