<div>
    @forelse ($posts as $post)
        <livewire:posts.post-block :post="$post" wire:key='{{ $post->id }}'>

        @empty
            <h1>no post display</h1>
    @endforelse
</div>
