@extends('layouts.content')
@section('body_content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <div class="page-header-title">
                                <div class="page-header-icon me-4">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                Product Book
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-xl mt-n10 px-4">
            <div class="card mb-4">
                <div class="card-header">Edit Product Book</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="/product-book/{{ $productBook['uid'] }}/edit" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-floating mb-3">
                                    <select name="category_uid" id="category_uid" class="form-control selectpicker" required
                                        data-live-search="true">
                                        <option disabled>Select Category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->uid }}"
                                                {{ $productBook['category_uid'] === $item->uid ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="category_uid">Category</label>
                                </div>
                                <div class="mb-3">
                                    <label for="name_produk" class="small mb-1">Name Produk</label>
                                    <input type="text" value="{{ old('name_produk', $productBook['name_produk']) }}"
                                        class="form-control" name="name_produk" id="name_produk">
                                </div>
                                <div class="mb-3">
                                    <label for="amount" class="small mb-1">Amount Produk</label>
                                    <input type="number" value="{{ old('amount', $productBook['amount']) }}"
                                        class="form-control" name="amount" id="amount">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="small mb-1">Title Produk</label>
                                    <input type="text" value="{{ old('title', $productBook['title']) }}"
                                        class="form-control" name="title" id="title">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="small mb-1">Address Produk</label>
                                    <input type="text" value="{{ old('address', $productBook['address']) }}"
                                        class="form-control" name="address" id="address">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="small mb-1">Price Produk</label>
                                    <input type="text" value="{{ old('price', $productBook['price']) }}"
                                        class="form-control" name="price" id="price">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="small mb-1">Image</label>
                                    @if ($productBook['image'])
                                        <input type="file" name="image" id="image" class="form-control"
                                            onchange="previewImage()" accept="image/*">
                                        <img src="/assets/img/productBook/{{ $productBook['image'] }}"
                                            alt="{{ $productBook['image'] }}"
                                            class="img-preview img-fluid mb-3 col-sm-5 mt-2"
                                            style="width: 350px; height: 250px;">
                                    @else
                                        <input type="file" name="image" id="image" class="form-control"
                                            onchange="previewImage()" accept="image/*" required>
                                        <img class="img-preview img-fluid mt-3 col-sm-5"
                                            style="width: 350px; height: 250px; display: none;">
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function previewImage() {
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
