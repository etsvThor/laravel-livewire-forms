<div class="form-group row">
    <label for="{{ $this->getId() }}-{{ $field->name }}" class="col-md-2 col-form-label text-md-right">
        {{ $field->label }}
    </label>

    <div class="col-md">
        <textarea
            id="{{ $this->getId() }}-{{ $field->name }}"
            rows="{{ $field->textarea_rows }}"
            class="form-control @error($field->key) is-invalid @enderror"
            placeholder="{{ $field->placeholder }}"
            wire:model.live="{{ $field->key }}"></textarea>

        @include('laravel-livewire-forms::fields.error-help')
    </div>
</div>
