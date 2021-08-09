<div>

    <div wire:ignore>
        <select class="form-control" id="select2-dropdown">
            <option value="">Select Option</option>
            @foreach($categories as $category)
                <option value="{{ $category }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

</div>

@push('scripts')

    <script>
        $(document).ready(function () {
            $('#select2-dropdown').select2();
            $('#select2-dropdown').on('change', function (e) {
                var data = $('#select2-dropdown').select2("val");
                @this.set('ottPlatform', data);
            });
        });

    </script>

@endpush