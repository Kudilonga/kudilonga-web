@extends('layouts.admin')

@section('title') Palavras @endsection
@section('css')

    <link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') Dicionário  @endslot
         @slot('li_1') Palavras  @endslot
     @endcomponent

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Palavras do Doicionário</h4>
                        <p class="card-title-desc">
                            Abaixo encontram-se todas as palavras do dicionári e as suas respectivas traduções, clique no botão exemplo para ver todos os exemplos relacionados com as mesmas.
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Palavra</th>
                                    <th>Lingua</th>
                                    <th>Abreviação</th>
                                    <th>Tradução</th>
                                    <th align="center">Opções</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nome</td>
                                    <td>Pt</td>
                                    <td>Nome</td>
                                    <td>Dijina</td>
                                    <td class="">
                                        <button type="button" class="btn btn-info waves-effect waves-light">Exemplos</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Editar</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nome</td>
                                    <td>Pt</td>
                                    <td>Nome</td>
                                    <td>Dijina</td>
                                    <td class="">
                                        <button type="button" class="btn btn-info waves-effect waves-light">Exemplos</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Editar</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nome</td>
                                    <td>Pt</td>
                                    <td>Nome</td>
                                    <td>Dijina</td>
                                    <td class="">
                                        <button type="button" class="btn btn-info waves-effect waves-light">Exemplos</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Editar</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nome</td>
                                    <td>Pt</td>
                                    <td>Nome</td>
                                    <td>Dijina</td>
                                    <td class="">
                                        <button type="button" class="btn btn-info waves-effect waves-light">Exemplos</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Editar</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nome</td>
                                    <td>Pt</td>
                                    <td>Nome</td>
                                    <td>Dijina</td>
                                    <td class="">
                                        <button type="button" class="btn btn-info waves-effect waves-light">Exemplos</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Editar</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Nome</td>
                                    <td>Pt</td>
                                    <td>Nome</td>
                                    <td>Dijina</td>
                                    <td class="">
                                        <button type="button" class="btn btn-info waves-effect waves-light">Exemplos</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Editar</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Nome</td>
                                    <td>Pt</td>
                                    <td>Nome</td>
                                    <td>Dijina</td>
                                    <td class="">
                                        <button type="button" class="btn btn-info waves-effect waves-light">Exemplos</button>
                                        <button type="button" class="btn btn-warning waves-effect waves-light">Editar</button>
                                        <button type="button" class="btn btn-danger waves-effect waves-light">Eliminar</button>
                    
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    @endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js')}}"></script>

@endsection