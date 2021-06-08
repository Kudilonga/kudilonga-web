@extends('layouts.admin')

@section('title') Form Elements @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') Add Palavra  @endslot
         @slot('li_1') Palavra  @endslot
     @endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Adicionar Palavra</h4>
                <p class="card-title-desc"> </p>
                <div>
                    <form action="" class="" method="post">
                        <div class="form-group">
                            <label class="col-">Palavra</label>
                            <input class="form-control" type="text" placeholder="Palavra">
                        </div>

                        <div>
                            <input type="radio" name="rbPortugues" id="rbPortugues" checked>
                            <label for="rbPortugues">Português</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="rbPortugues" id="rbKimbundu">
                            <label for="rbKimbundu">Kimbundu</label>
        
                        </div>

                        <div class="form-group">
                            <label class="col-">Abreviação</label>
                            <input class="form-control" type="text" placeholder="Abreviação">
                        </div>

                        <div class="form-group">
                            <label class="col-">Falar</label>
                            <input class="form-control" type="text" placeholder="Falar">
                        </div>

                        <div class="form-group">
                            <label class="col-">Tradução</label>
                            <select class="form-control select2">
                                <option>Perquisar...</option>
                                <option value="CT">Connecticut</option>
                                 <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
                            </select>
    
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection