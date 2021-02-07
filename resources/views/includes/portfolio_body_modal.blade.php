<h2 class="text-uppercase">{{ $project->name }}</h2>
<img class="img-fluid d-block mx-auto" src="{{ $project->path_full_img }}" alt=""/>
<p>{{ $project->content }}</p>
<ul class="list-inline">
    <li>Date: {{ $project->data }}</li>
    <li>Client: {{ $project->client->title }}</li>
    <li>Category: {{ $project->category->title }}</li>
</ul>
