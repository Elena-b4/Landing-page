<header class="masthead" id="container">
    <div class="container">
        <form enctype="multipart/form-data" action="{{ route('greetings.update', $greeting->id) }}"
              method="post">
            @csrf
            @method('patch')
            <input class="form-control m-5" name="subheading" value="{{ $greeting->subheading }}">
            @error('subheading')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <input class="form-control m-5" name="heading" value="{{ $greeting->heading }}">
            @error('heading')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-danger">Update</button>
        </form>
    </div>
</header>
