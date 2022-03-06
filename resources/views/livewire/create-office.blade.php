<div>
    <form wire:submit.prevent="submit">
        {{ $this->form }}
     
        <button type="submit">
            {{ __('Create') }}
        </button>
    </form>
</div>
