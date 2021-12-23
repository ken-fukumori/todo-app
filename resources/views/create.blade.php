<form action="{{ route('todo.store') }}" method="post">
  @csrf
  <div>
    <label>Todoを入力してください：</label>
    <input type="text" name="title" placeholder="Todoを入力">
  </div>
  <div>
  <label>Todoの詳細を入力してください：</label>
    <input type="text" name="detail" placeholder="詳細を入力">
  </div>
  <input type="submit" value="登録">
</form>

<a href="{{route('todo.index')}}">戻る</a>