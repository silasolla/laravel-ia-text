<a href="{{ route('texts.show', [ 'id' => $text->id ]) }}" >戻る</a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('texts.update', [ 'id' => $text->id ])}}">
 	@csrf
 	<label for="title">タイトル</label>
	<input id="title" type="text" name="title" value="{{ $text->title }}">
	<br>
	<label for="content">コンテンツ</label>
	<input id="content" type"text" name="content" value="{{ $text->content }}">
	<br>
	<label for="email">メールアドレス</label>
	<input id="email" type="text" name="email" value="{{ $text->email }}">
	<br>
	<label for="price">価格</label>
	<input id="price" type="text" name="price" value="{{ $text->price }}">
	<br>
	<label for="is_visible_y">表示</label>
	<input id="is_visible_y" type="radio" name="is_visible" value="1" {{ $text->is_visible  === 1 ? 'checked' : '' }}>
	<br>
	<label for="is_visible_n">非表示</label>
	<input id="is_visible_n" type="radio" name="is_visible" value="0" {{ $text->is_visible  === 0 ? 'checked' : '' }}>
	<br>
	<button>更新する</button>
</form>  
