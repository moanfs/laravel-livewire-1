<div class="col-lg-6">
    <div class="card ">
        <div class="card-body">
            <div class="card-title text-center">
                <h1>Form Login</h1>
            </div>
            <form wire:submit='login'>
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input type="email" wire:model='email' name="" class="form-control" id="email">
                    @error('email')
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password">Password</label>
                    <input type="password" wire:model='password' name="" class="form-control" id="password">
                    @error('password')
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">login</button>
            </form>
        </div>
    </div>
</div>
