@if ($errors->any())
    <div class="alert alert-danger">
        Your data was invalid
    </div>
@endif
<div class="card">
    <div class="card-header">Create New Task</div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="post" class="d-flex justify-content-between gap-2">
            @csrf
            @include('tasks._form')
        </form>
    </div>
</div>
