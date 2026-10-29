<div>
    <div class="card">
        <div class="card-body">
            @foreach($fields as $field)
                @if($field->view)
                    @include($field->view)
                @else
                    @include('laravel-livewire-forms::fields.' . $field->type)
                @endif
            @endforeach

            <div class="row">
                <div class="col-md offset-md-2">
                    <button class="btn btn-primary" wire:click="saveAndStay">{{ __('Save') }}</button>
                    <button class="btn btn-primary" wire:click="saveAndGoBack">{{ __('Save & Go Back') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Code is inspired by Pastor Ryan Hayden
        // https://github.com/livewire/livewire/issues/106
        // Thank you, sir!
        // The listener is delegated, because Livewire replaces the file input when the form re-renders
        if (! window.livewireFormsFileUpload) {
            window.livewireFormsFileUpload = true;

            document.addEventListener('input', event => {
                const file = event.target;
                if (! (file instanceof HTMLInputElement) || file.type !== 'file' || ! file.dataset.fieldName) {
                    return;
                }

                const component = Livewire.find(file.closest('[wire\\:id]').getAttribute('wire:id'));

                let form_data = new FormData();
                form_data.append('component', file.dataset.component);
                form_data.append('field_name', file.dataset.fieldName);

                for (let i = 0; i < file.files.length; i++) {
                    form_data.append('files[]', file.files[i]);
                }

                axios.post('{{ route('laravel-livewire-forms.file-upload') }}', form_data, {
                    headers: {'Content-Type': 'multipart/form-data'}
                }).then(response => {
                    component.call('fileUpdate', response.data.field_name, response.data.uploaded_files);
                });
            });
        }
    </script>
@endpush
