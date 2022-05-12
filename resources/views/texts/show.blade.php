<a href="{{ route('texts.index') }}">一覧に戻る</a><br>

ID：{{ $text->id }}
<br>
タイトル：『{{ $text->title }}』
<br>
コンテンツ：{{ $text->content }}
<br>
メールアドレス：{{ $text->email }}
<br>
価格：{{ $text->price }}円
<br>
表示設定：{{ $text->is_visible === 1 ? '表示' : '非表示' }}
<br>

<a href="{{ route('texts.edit', [ 'id' => $text->id ]) }}" >編集する</a>
<br><br>

<form method="post" action="{{ route('texts.delete', [ 'id' => $text->id ])}}">
  @csrf
  <button>削除する</button>
</form>
