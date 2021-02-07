<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
        </div>
        <div class="row">
            @foreach($projects as $project)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-block mt-4">Delete
                        </button>
                    </form>
                    <form action="{{ route('projects.update', $project->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-2 mt-2">
                        </div>
                        <div class="portfolio-item">

                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <img class="img-fluid" src="{{ $project->path_img }}" alt=""/>
                            </a>
                            <div class="portfolio-caption">
                                <div>
                                    <label>Date</label>
                                    <input
                                        class="form-control" name="data" placeholder="Date"
                                        value="{{ $project->data }}">
                                    @error('data')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="mt-2">Client</label>
                                    <select class="form-control" name="client_id">
                                        @foreach($clients as $client)
                                            <option
                                                value="{{ $client->id }}" {{ $client->id === $project->client->id ? " selected" : "" }}>{{ $client->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="mt-2">Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }}" {{ $category->id === $project->category->id ? " selected" : "" }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="mt-2">Project name</label>
                                    <input
                                        class="form-control" name="name" placeholder="Project name"
                                        value="{{ $project->name }}">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label class="mt-2">Content</label>
                                    <textarea
                                        class="form-control" name="content" rows="7"
                                        placeholder="Content">{{ $project->content }}
                                                    </textarea>
                                    @error('content')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-2 mt-2">
                                    <label>Image</label>
                                    <input type="file" id="exampleInputFile" name="path_img">
                                    @error('path_img')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label>Full image</label>
                                    <input type="file" id="exampleInputFile" name="path_full_img">
                                    @error('path_full_img')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-outline-danger btn-block mt-4">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
            <div class="col-lg-4 col-sm-6 mb-4">
                <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2 mt-2">
                    </div>
                    <div class="portfolio-item">
                        <div class="portfolio-caption">
                            <div>
                                <label>Date</label>
                                <input
                                    class="form-control" name="data" placeholder="Date">
                                @error('data')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="mt-2">Client</label>
                                <select class="form-control" name="client_id">
                                    @foreach($clients as $client)
                                        <option
                                            value="{{ $client->id }}" {{ $client->id === $project->client->id ? " selected" : "" }}>{{ $client->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="mt-2">Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->id }}" {{ $category->id === $project->category->id ? " selected" : "" }}>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="mt-2">Project name</label>
                                <input
                                    class="form-control" name="name" placeholder="Project name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="mt-2">Content</label>
                                <textarea
                                    class="form-control" name="content" rows="21"
                                    placeholder="Content"></textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-2 mt-2">
                                <label>Image</label>
                                <input type="file" id="exampleInputFile" name="path_img">
                                @error('path_img')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label>Full image</label>
                                <input type="file" id="exampleInputFile" name="path_full_img">
                                @error('path_full_img')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-danger btn-block mt-4">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
</section>
