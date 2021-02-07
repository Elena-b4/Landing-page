<section class="page-section" id="about">

    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
        </div>
        @foreach($stories as $story)
            <div class="card mb-3">
                <div class="row col-md-12">
                    <div class="col-md-4 mt-3">
                        <img class="img-thumbnail w-100" src="{{ $story->path_img }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <form action="{{ route('about.update', $story->id) }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                    <label class="mt-2">Title</label>
                                    <input class="form-control"
                                           name="title" placeholder="Title"
                                           value="{{ $story->title }}">

                                <label class="mt-2">Content</label>
                                <textarea class="form-control" rows="5"
                                          name="content" placeholder="Content">
                                                        {{ $story->content }}
                                            </textarea>
                                <label>Time</label>
                                <input
                                    class="form-control" name="time" placeholder="Time"
                                    value="{{ $story->time }}">
                                <div class="mt-3">
                                    <label class="mr-3">Image</label>
                                    <input type="file" id="exampleInputFile" name="path_img">

                                </div>
                                <button type="submit" class="btn btn-outline-danger btn-block mt-4">
                                    Update
                                </button>
                            </form>
                            <form action="{{ route('about.destroy', $story->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-block mt-4 mb-2">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card mb-3">
                <div class="row col-md-12">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title w-100">
                                <label class="mt-2">Title</label>
                                <input class="form-control"
                                       name="title" placeholder="Title">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </h5>
                            <label class="mt-2">Content</label>
                            <textarea class="form-control" rows="5"
                                      name="content" placeholder="Content"></textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror


                            <label>Time</label>
                            <input
                                class="form-control" name="time" placeholder="Time">
                            @error('time')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-3">
                                <label class="mr-3">Image</label>
                                <input type="file" id="exampleInputFile" name="path_img">
                                @error('path_img')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-danger btn-block mt-4">
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
