@if(session('success'))
    @push('scripts')
        <script>
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    @endpush
@endif
