@extends('layouts.main')
@section('title', $title)
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Agregar Categorias</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agregar nueva categoria</h5>

                            <form action="{{ route('store-category') }}" method="POST">
                                @csrf
                                <label for="name">Nombre de categoria</label>
                                <input type="text" class="form-control" required name="name" id="name"
                                    placeholder="nombre de la categoria">
                                <div class="mt-2">
                                    <button class="btn btn-primary ">Guardar</button>
                                    <a href="{{ route('categories') }}" class="btn btn-info">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
