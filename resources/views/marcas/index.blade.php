{{-- herda da view 'base' --}}
@extends('base')
{{-- Não Esquecer de abrir e fechar --}}
@section('content')
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-rows-1">
                        @if (!isset($marcas))
                            <p class="lead fw-normal text-muted mb-5">Nenhuma marca cadastrada</p>
                        @else
                            <div class="card shadow mb-5">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-black">Lista de Marcas</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                                cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                                style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th colspan="3">Opções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- Itera/Percorre os registros salvos --}}
                                                    @foreach ($marcas as $marca)
                                                        <tr>
                                                            <td>{{ $marca->nome }}</td>
                                                            <td>
                                                                <a href="{{ route('marcas.show', $marca) }}">Exibir</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('marcas.edit', $marca) }}">Editar</a>
                                                            </td>
                                                            <td>
                                                                <form action="{{ route('marcas.destroy', $marca) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button
                                                                        class="btn btn-sm btn-danger ml-2">Remover</button>
                                                                </form>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <td colspan="4">Marcas Cadastradas:
                                                        {{ $marcas->count() }}
                                                    </td>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
        {{-- Não Esquecer de abrir e fechar --}}
    @endsection
