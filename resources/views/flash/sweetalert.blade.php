@if (Session::has('default'))
    <script>
        swal({
            type: "{{ Session::get('default.level') }}",
            title: "{{ Session::get('default.title') }}",
            text: "{{ Session::get('default.message') }}",
            timer: 4000,
        });
    </script>
@endif