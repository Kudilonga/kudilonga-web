@extends('layouts.masterDicionario')

@section('css')

<link href="{{URL::asset('libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />

@endsection

@section('title') Dicionário @endsection

@section('content')

     @component('common-components.breadcrumb')
         @slot('title') KudilongaApp  @endslot
         @slot('li_1') Seu dicionário de linguas  @endslot
     @endcomponent


<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <input type="radio" name="rbPortugues" id="rbPortugues" checked>
                    <label for="rbPortugues">Português</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rbPortugues" id="rbKimbundu">
                    <label for="rbKimbundu">Kimbundu</label>

                </div>

                <form>
                    <div class="form-group col-lg-12">
                        <select class="form-control select2">
                            <option>Perquisar...</option>
                            <option value="CT">Connecticut</option>
                             <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </select>

                    </div>

                </form>

            </div>
        </div>
        <!-- end select2 -->

    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="{{URL::asset('/libs/select2/select2.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
<script src="{{URL::asset('/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- form advanced init -->
<script src="{{URL::asset('/js/pages/form-advanced.init.js')}}"></script>
@endsection
