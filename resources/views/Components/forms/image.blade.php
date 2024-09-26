@props(['name', 'label'])

@php
    $defaults = [
        'type' => 'file',
        'name' => $name,
        'id' => $name,
        'class' => 'hidden',
        'accept' => 'image/*',
        'multiple' => true,
    ]
@endphp

<x-forms.field :$label :$name>
    <div class="flex items-center justify-center w-full">
        <label for="{{ $name }}" id="{{ $name }}-dropzone" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or GIF (MAX. 800x400px)</p>
            </div>
            <input {{ $attributes($defaults) }}>
        </label>
    </div>
    <div id="{{ $name }}-preview" class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-4"></div>
</x-forms.field>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropzone = document.getElementById('{{ $name }}-dropzone');
        const input = document.getElementById('{{ $name }}');
        const preview = document.getElementById('{{ $name }}-preview');

        function handleFiles(files) {
            preview.innerHTML = '';

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (!file.type.startsWith('image/')) continue;

                const img = document.createElement('img');
                img.classList.add('h-auto', 'max-w-full', 'rounded-lg');
                img.file = file;

                const reader = new FileReader();
                reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
                reader.readAsDataURL(file);

                preview.appendChild(img);
            }
        }

        input.addEventListener('change', function(e) {
            handleFiles(this.files);
        });

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropzone.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            dropzone.classList.add('border-blue-500', 'bg-blue-100');
        }

        function unhighlight(e) {
            dropzone.classList.remove('border-blue-500', 'bg-blue-100');
        }

        dropzone.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            input.files = files;
            handleFiles(files);
        }
    });
</script>
