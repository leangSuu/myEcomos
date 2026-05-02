<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background:#f5f7fa; }
        .card { border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); }
        .preview { width:120px; height:160px; object-fit:cover; border-radius:8px; }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="d-flex justify-content-between mb-4">
        <h2>✏ Edit Book</h2>
        <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card p-4">

        <form method="POST" action="{{ route('admin.books.update', $book->id) }}" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-4 text-center mb-3">
                    @if($book->img)
                        <img src="{{ asset('uploads/'.$book->img) }}" class="preview mb-2">
                    @endif
                    <input type="file" name="book_img" class="form-control">
                </div>

                <div class="col-md-8">

                    <input type="text" name="book_title" value="{{ $book->title }}" class="form-control mb-2">
                    <input type="text" name="author_name" value="{{ $book->author }}" class="form-control mb-2">
                    <input type="text" name="book_number" value="{{ $book->ibsn }}" class="form-control mb-2">
                    <select name="book_genre" class="form-select mb-2">
                        <option value="">-- Select Category --</option>
                        <option value="Fiction" {{ $book->category == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                        <option value="Non-Fiction" {{ $book->category == 'Non-Fiction' ? 'selected' : '' }}>Non-Fiction</option>
                        <option value="Science" {{ $book->category == 'Science' ? 'selected' : '' }}>Science</option>
                        <option value="Technology" {{ $book->category == 'Technology' ? 'selected' : '' }}>Technology</option>
                        <option value="History" {{ $book->category == 'History' ? 'selected' : '' }}>History</option>
                        <option value="Education" {{ $book->category == 'Education' ? 'selected' : '' }}>Education</option>
                        <option value="Biography" {{ $book->category == 'Biography' ? 'selected' : '' }}>Biography</option>
                        <option value="Business" {{ $book->category == 'Business' ? 'selected' : '' }}>Business</option>
                    </select>
                    <input type="date" name="publish_date" value="{{ $book->publish_date }}" class="form-control mb-2">
                    <input type="text" name="publisher" value="{{ $book->publisher }}" class="form-control mb-2">

                    <textarea name="description" class="form-control mb-2">{{ $book->descriptions }}</textarea>

                    <input type="text" name="tag" value="{{ $book->tag }}" class="form-control mb-2">

                    <input type="file" name="book_file" class="form-control mb-3">

                </div>

            </div>

            <button class="btn btn-success w-100">💾 Update Book</button>

        </form>

    </div>

</div>

</body>
</html>