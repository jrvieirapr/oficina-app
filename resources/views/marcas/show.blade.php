{{-- herda da view 'base' --}}
@extends('base')
{{-- Não Esquecer de abrir e fechar --}}
@section('content')
    <section class="py-5">
        <div class="container px-5">
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Nova Marca</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form id="contactForm" class="form"  action="{{ route('marcas.index')}}">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nome" name="nome" type="text"
                                    placeholder="Digite o nome da marca..." value="{{$marca->nome}}" disabled>
                                <label for="nome">Nome da marca</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A nome is required.</div>
                                <div class="d-grid"><button class="btn btn-success btn-lg" id="submitButton"
                                    type="submit">Voltar</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Não Esquecer de abrir e fechar --}}
    @endsection
