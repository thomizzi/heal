<div>
    <form wire:submit.prevent="submit">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        {{ $this->form }}
     
        <button type="submit">
            {{ __('Create') }}
        </button>
    </form>
</div>
