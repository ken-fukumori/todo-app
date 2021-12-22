@foreach($todos as $todo)
<p>タイトル：{{ $todo->title }}<p>
<p>詳細：{{ $todo->detail }}</p>
@endforeach