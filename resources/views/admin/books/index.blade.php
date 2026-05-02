<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        body {
            background: #eef2f7;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        /* Card */
        .card {
            border-radius: 14px;
            border: none;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        /* Table */
        .table thead {
            background: #1e293b;
            color: #fff;
        }

        .table tbody tr {
            transition: 0.2s;
        }

        .table tbody tr:hover {
            background: #f1f5f9;
        }

        /* Image */
        .book-img {
            width: 50px;
            height: 70px;
            object-fit: cover;
            border-radius: 6px;
        }

        /* Buttons */
        .btn-custom {
            border-radius: 8px;
            font-size: 13px;
            padding: 5px 10px;
        }

        /* Title */
        .title {
            font-weight: 600;
        }

        /* Badge */
        .badge-soft {
            background: #e2e8f0;
            color: #334155;
            padding: 5px 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <!-- HEADER -->
        <div class="page-header">
            <div>
                <h3 class="fw-bold">📚 Book Management</h3>
                <small class="text-muted">Manage all books in your system</small>
            </div>

            <a href="{{ url('/admin/books/create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add Book
            </a>
        </div>

        <!-- CARD -->
        <div class="card p-4">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cover</th>
                            <th>Book Info</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($books as $book)
                        <tr>

                            <td>{{ $book->id }}</td>

                            <td>
                                @if($book->img)
                                <img src="{{ asset('uploads/'.$book->img) }}" class="book-img">
                                @else
                                <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            <td>
                                <div class="title">{{ $book->title }}</div>
                                <small class="text-muted">by {{ $book->author }}</small>
                            </td>

                            <td>
                                <span class="badge-soft">
                                    {{ $book->category ?? 'N/A' }}
                                </span>
                            </td>

                            <td class="text-center">

                                <div class="d-flex justify-content-center gap-2">

                                    @if($book->pdf)
                                    <a href="{{ asset('uploads/'.$book->pdf) }}"
                                        target="_blank"
                                        class="btn btn-sm btn-primary btn-custom">
                                        <i class="bi bi-book"></i>
                                    </a>
                                    @endif

                                    <a href="{{ url('/admin/books/edit/'.$book->id) }}"
                                        class="btn btn-sm btn-warning btn-custom">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <a href="{{ url('/admin/books/delete/'.$book->id) }}"
                                        onclick="return confirm('Delete this book?')"
                                        class="btn btn-sm btn-danger btn-custom">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                </div>

                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                No books found
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>