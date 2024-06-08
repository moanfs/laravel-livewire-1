<div>
    <div class="card">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit='save'>
                <div class="mb-4">
                    <label for="title" class="form-label">title</label>
                    <input type="text" wire:model="form.title" id="title" class="form-control"></input>
                    @error('form.title')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-label">body</label>
                    <textarea wire:model="form.body" id="body" class="form-control" rows="3"></textarea>
                    @error('form.body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary">save</button>
            </form>
        </div>
    </div>
</div>
