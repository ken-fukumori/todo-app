<form action="{{route('todo.update', $todo->id )}}" method="post">
  @csrf
  <div>
    <label>Todoを入力してください：</label>
    <input type="text" name="title" placeholder="Todoを入力" value="{{ $todo->title }}">
  </div>
  <div>
  <label>Todoの詳細を入力してください：</label>
    <input type="text" name="detail" placeholder="詳細を入力" value="{{ $todo->detail }}">
  </div>
  <input type="submit" value="登録">
</form>

<a href="{{route('todo.index')}}">戻る</a>