<ul>
    @if ($errors->any())
        @foreach ($errors->all() as $errors)
            <li>{{$errors}}</li>
        @endforeach
    @endif
</ul>