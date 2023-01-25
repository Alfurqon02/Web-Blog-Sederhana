@extends('dashboard.layouts.main')

@section('container')

    <h1 class="mt-4">Edit Category</h1>
<div>
    <form action="/dashboard/categories/{{ $category->slug }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3 col-lg-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('name')
            is-invalid
            @enderror" id="name" name="name" required value="{{ old('name', $category->name) }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3 col-lg-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug')
                is-invalid 
            @enderror" id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
            @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary mb-3">Update Category</button>  
        </div>
    </form>
</div>

<script>
        const name = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        name.addEventListener("keyup", function () {
            let preslug = name.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

</script>

{{-- <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function(){
            fetch('/dashboard/categories/checkSlug?name='+name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
</script> --}}

@endsection