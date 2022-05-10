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
	<label for="title">題名</label>
	<input id="title" type="text" name="title" value="{{ old('title') }}">
	<br>
	<label for="content">内容</label>
	<input id="content" type="text" name="content" value="{{ old('content') }}">
	<br>
	<button>送信</button>
</form>
