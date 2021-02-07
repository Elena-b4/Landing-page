<section class="page-section" id="services">

    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
        </div>
        <div class="row text-center">
            @foreach($services as $service)
                <div class="col-md-6 mt-3">
                    <form action="{{ route('services.update', $service->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-2x text-primary"></i>
                            <i class="{{ $service->icon }} fa-stack-1x fa-inverse"></i>
                        </span>
                        <input class="form-control mt-2 mb-2" name="icon" value="{{ $service->icon }}">
                        @error('icon')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" name="department"
                               value="{{ $service->department }}">
                        @error('department')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control mb-2"
                                  rows="8"
                                  name="description">{{ $service->description }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-outline-danger btn-block">Update</button>
                    </form>
                    <form action="{{ route('services.destroy', $service->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-block mt-2">Delete
                        </button>
                    </form>
                </div>
            @endforeach
                <div class="col-md-6 mt-3">
                    <form action="{{ route('services.store') }}" method="post">
                        @csrf
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-2x text-primary"></i>
                        </span>
                        <input class="form-control mt-2 mb-2" name="icon" placeholder="Icon">
                        @error('icon')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input class="form-control mb-2" name="department" placeholder="Department">
                        @error('department')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <textarea class="form-control mb-2" placeholder="Description"
                                  rows="8"
                                  name="description"></textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-outline-danger btn-block">Add</button>
                    </form>
                </div>
        </div>
    </div>
</section>
