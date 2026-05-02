<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background:#f5f7fa; }
        .card { border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1); }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="d-flex justify-content-between mb-4">
        <h2>➕ Add Book</h2>
        <a href="{{ route('admin.books.index') }}" class="btn btn-secondary">Back</a>
    </div>

    <div class="card p-4">

        <form method="POST" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Title</label>
                    <input type="text" name="book_title" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Author</label>
                    <input type="text" name="author_name" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>ISBN</label>
                    <input type="text" name="book_number" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Category</label>
                    <select name="book_genre" class="form-select">
                        <option value="">-- Select Category --</option>
                        <option value="Fiction">Fiction</option>
                        <option value="Non-Fiction">Non-Fiction</option>
                        <option value="Science">Science</option>
                        <option value="Technology">Technology</option>
                        <option value="History">History</option>
                        <option value="Education">Education</option>
                        <option value="Biography">Biography</option>
                        <option value="Business">Business</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Publish Date</label>
                    <input type="date" name="publish_date" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Publisher</label>
                    <input type="text" name="publisher" class="form-control">
                </div>

                <div class="col-12 mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="col-12 mb-3">
                    <label>Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Book Image</label>
                    <input type="file" name="book_img" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>PDF File</label>
                    <input type="file" name="book_file" class="form-control">
                </div>

            </div>

            <button class="btn btn-success w-100">💾 Save Book</button>

        </form>

    </div>

</div>

</body>
</html>