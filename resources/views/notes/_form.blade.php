@csrf

<label>Title</label>
<input type="text" name="title" value="{{ old('title', $note->title ?? '') }}">
@error('title') <div class="error">{{ $message }}</div> @enderror

<label>Body</label>
<textarea name="body" rows="5">{{ old('body', $note->body ?? '') }}</textarea>

<button type="submit">Save</button>
<a href="{{ route('notes.index') }}">Cancel</a>