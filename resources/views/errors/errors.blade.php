@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul class="lista-group">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif