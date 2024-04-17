<x-app-layout title="Tasks">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Your data was invalid
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Update Tasks</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update', $task->id) }}" method="post"
                            class="d-flex justify-content-between gap-2">
                            @method('put')
                            @csrf
                            <div class="flex-fill">
                                <input type="text" class="form-control @error('list') is-invalid @enderror"
                                    name="list" id="" placeholder="The name of task"
                                    value="{{ $task->list }}">
                                @error('list')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <button class="btn btn-primary align-self-start" type="submit">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
