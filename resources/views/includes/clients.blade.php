<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach($clients as $client)
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="{{ $client->path }}"><img class="img-fluid d-block mx-auto"
                                                       src="{{ $client->logotype }}"
                                                       alt=""/></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
