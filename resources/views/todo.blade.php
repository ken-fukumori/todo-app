<table border="1">
  <tr>
    <th>Todoのタイトル</th>
    <th>Todoの詳細</th>
  </tr>
  @foreach($todos as $todo)
  <tr>
    <td>{{ $todo->title }}</td>
    <td>{{ $todo->detail }}</td>
  </tr>
  @endforeach
</table>