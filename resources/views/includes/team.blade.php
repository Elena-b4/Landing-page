<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our amazing team</h2>
        </div>
        <div class="row">
            @foreach($workers as $worker)
                <div class="col-lg-6">

                    <div class="team-member">
                        <form action="{{ route('team.update', $worker->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <img class="mx-auto rounded-circle" src="{{ $worker->path }}" alt=""/>
                            <div class="m-2">
                                <input type="file" id="exampleInputFile" name="path">
                                @error('path')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <label>Name</label>
                            <input
                                class="form-control" name="name" placeholder="Name"
                                value="{{ $worker->name }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <label>Position</label>
                            <input
                                class="form-control" name="position" placeholder="Position"
                                value="{{ $worker->position }}">
                            @error('position')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <label for="inputTwitter">Twitter</label>
                            <input type="text" class="form-control" name="twitter" id="inputTwitter"
                                   value="{{ $worker->twitter }}">
                            @error('twitter')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <label for="inputFacebook">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="inputFacebook"
                                   value="{{ $worker->facebook }}">
                            @error('facebook')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <label for="inputLinkedin">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" id="inputLinkedin"
                                   value="{{ $worker->linkedin }}">
                            @error('linkedin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-outline-danger btn-block mt-4">
                                Update
                            </button>
                        </form>
                        <form action="{{ route('team.destroy', $worker->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-block mt-3">Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-6">
                <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="team-member">
                        <img class="mx-auto rounded-circle">
                        <div class="m-2">
                            <input type="file" id="exampleInputFile" name="path">
                            @error('path')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label>Name</label>
                        <input
                            class="form-control" name="name" placeholder="Name">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label>Position</label>
                        <input
                            class="form-control" name="position" placeholder="Position">
                        @error('position')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="inputTwitter">Twitter</label>
                        <input type="text" class="form-control" id="inputTwitter" name="twitter" placeholder="Twitter">
                        @error('twitter')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="inputFacebook">Facebook</label>
                        <input type="text" class="form-control" id="inputFacebook" name="facebook"
                               placeholder="Facebook">
                        @error('facebook')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="inputLinkedin">Linkedin</label>
                        <input type="text" class="form-control" id="inputLinkedin" name="linkedin"
                               placeholder="Linkedin">
                        @error('linkedin')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-outline-danger btn-block mt-4">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
