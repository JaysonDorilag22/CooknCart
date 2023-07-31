@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="">
@endsection

@section('scriptHead')
    <script></script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $ingredient->image) }}" class="card-img-top img-fluid"
                                alt="Ingredient Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">{{ $ingredient->name }}</h1>
                                <p class="card-text">₱{{ $ingredient->price }}</p>
                                <p class="card-text">{{ $ingredient->description }}</p>
                                <h9 class="card-title">
                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i> 5.0
                                </h9>
                                <hr>
                                <div class="input-group text-center mb-3" style="width:130px;">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control qty-input text-center"
                                        value="1">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                                @if ($ingredient->quantity > 0)
                                    <div class="col-md-9">
                                        <label class="text">In Stock</label>

                                        <div class="mb-3">
                                            {{-- <a href="{{ route('add.to.cart', $ingredient->id) }}" --}}
                                            <a href="#"

                                                class="btn btn-primary">Add to Cart <i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-9">
                                        <label class="text">Out of Stock</label>
                                        <button type="button" class="btn btn-primary me-3 addToWishlist"> Add to Wishlist
                                            <i class="fa fa-heart"></i></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

</script>
@section('scriptFoot')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Increment and decrement quantity buttons
        $('.increment-btn').click(function(e) {
            e.preventDefault();

            var qty_input = $(this).closest('.card-body').find('.qty-input');
            var value = parseInt(qty_input.val(), 10);
            value = isNaN(value) ? 0 : value;

            if (value < 10) {
                value++;
                qty_input.val(value);
            }
        });

        $('.decrement-btn').click(function(e) {
            e.preventDefault();

            var qty_input = $(this).closest('.card-body').find('.qty-input');
            var value = parseInt(qty_input.val(), 10);
            value = isNaN(value) ? 0 : value;

            if (value > 1) {
                value--;
                qty_input.val(value);
            }
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
