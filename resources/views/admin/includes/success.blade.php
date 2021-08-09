@if(session('success'))
    @push('scripts')
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Operação concluída com sucesso!',
                showConfirmButton: true,
                timer: 3000
            })
        </script>
    @endpush
@endif

