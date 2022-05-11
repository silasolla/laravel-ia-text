<a href="{{ route('texts.index') }}">一覧に戻る</a><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('texts.store') }}" method="post">
	@csrf
	<label for="title">タイトル</label>
	<input id="title" type="text" name="title" value="{{ old('title') }}">
	<br>
	<label for="content">コンテンツ</label>
	<input id="content" type"text" name="content" value="{{ old('content') }}">
	<br>
	<label for="email">メールアドレス</label>
	<input id="email" type="text" name="email" value="{{ old('email') }}">
	<br>
	<label for="price">価格</label>
	<input id="price" type="text" name="price" value="{{ old('price') }}">
	<br>
	<label for="is_visible_y">表示</label>
	<input id="is_visible_y" type="radio" name="is_visible" value="1" checked>
	<br>
	<label for="is_visible_n">非表示</label>
	<input id="is_visible_n" type="radio" name="is_visible" value="0">
	<br>
	<button>送信</button>
</form>
