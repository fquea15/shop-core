@extends('layouts.main')
@section('title', $title)
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Categorias</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Administrar Categorias</h5>
                            <a href="{{ route('create-category') }}" class="btn btn-primary">
                                <span class="d-inline-flex align-items-center gap-2">
                                    <i class="bi bi-plus-circle"></i>
                                    <span>Agregar</span>
                                </span>
                            </a>

                            <hr>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a href="" class="btn btn-warning "><i
                                                        class="bi bi-pencil-square"></i></a>
                                                <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
