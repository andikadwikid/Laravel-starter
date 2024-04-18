<div class="flex-fill">
    <input type="text" class="form-control @error('list') is-invalid @enderror" name="list" id=""
        placeholder="The name of task" value="{{ old('list', $task->list) }}">
    @error('list')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<button class="btn btn-primary align-self-start" type="submit">
    {{ $submit }}
</button>
