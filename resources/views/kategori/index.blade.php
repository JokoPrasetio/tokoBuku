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
                                <i class="fas fa-handshake-simple fa-fw"></i>
                            </div>
                            Kategori
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-xl mt-n10 px-4">
        <div class="card mb-4">
            <div class="card-header">List Kategori</div>
            <div class="card-body">
                <button class="btn btn-success btn-xl btn-icon position-fixed end-0 me-5 lift floating-button bottom-0 mb-5" type="button" data-bs-toggle="modal" data-bs-target="#add_kategori" style="z-index: 99999;">
                    <i class="fas fa-plus fa-fw"></i>
                </button>
                
                <div class="container">
                    @include('layouts.alert')
                    <table id="list_table_category" with="100%"></table>
                </div>
            </div>
        </div>
    </div>
 </main>

 @include('kategori.modal.add_categori_modal')
 @include('kategori.modal.delete_categori_modal')

 <script src="/js/category/_init.js"></script>
 <script src="/js/category/dt.js"></script>
 <script src="/js/category/delete.js"></script>
@endsection