@extends("layout.nav")

@section("title", "Gallery")

<style>
    .card:hover .delete-btn {
        display: block;
    }

    .card .delete-btn {
        display: none;
    }
</style>

@section("content")
<div class="container mt-4">
    <div class="card">
        <div class="my-3 text-end">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Add New</a>
        </div>

        <div class="card-header text-center fw-bold">Gallery List</div>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="container">
            <div class="row g-3">
                @foreach ($galleries as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card position-relative h-100">
                            <h4>{{ $item->id }}</h4>
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="Gallery Image">
                            
                            <!-- Delete Button -->
                            <form action="{{ route('gallery.destroy',$item->user_id) }}" method="POST" class="position-absolute top-0 end-0 m-2 delete-btn">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
