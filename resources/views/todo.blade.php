<a href="{{ route('todo.create')}}">追加画面</a>
<table border="1">
  <tr>
    <th>Todoのタイトル</th>
    <th>Todoの詳細</th>
  </tr>
  @foreach($todos as $todo)
  <tr>
    <td>{!! nl2br(e($todo->title)) !!}</td>
    <td>{{ $todo->detail }}</td>
  </tr>
  @endforeach
</table>