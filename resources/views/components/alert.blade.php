@if(session('success'))
    <li class="alert alert-success">
        {{ session('success') }}
    </li>
@endif
@if ($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
