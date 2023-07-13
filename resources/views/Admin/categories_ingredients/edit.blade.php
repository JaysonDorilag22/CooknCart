@extends('layouts.app')
@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Category</h1>
                <form action="{{ route('categories_ingredients.update', $ingredientscategories->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $ingredientscategories->name }}" required>

                        <label for="description">Description:</label>
                        <textarea type="text" name="description" id="description" class="form-control"
                            value="{{ $ingredientscategories->description }}" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scriptFoot')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
@endsection
