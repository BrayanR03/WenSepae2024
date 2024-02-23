@if (session('mensaje'))
    <script>
        //console.log('{{session('mensaje')}}');
        alert('{{session('mensaje')}}');
    </script>
@endif