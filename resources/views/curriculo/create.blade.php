@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/vendor/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/select2-bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form_curriculo.min.css') }}">
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Cadastre seu currículo</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row pb-5">
            <div class="col-12 col-lg-10 mx-auto mt-n4">
                <div class="row">
                    <div class="col-2">
                        <x-curriculo-navigation/>
                    </div>
                    <div class="col-12 col-md-10">

                        <div class="bg-white shadow p-5 rounded-xl position-relative">
                            <div>
                                <livewire:curriculo.dados-basicos/>
                                <div class="py-4"></div>
                                <livewire:curriculo.formacoes/>
                                <div class="py-4"></div>
                                <livewire:curriculo.experiencias />
                                <div class="py-4"></div>
                                <livewire:curriculo.idiomas/>
                                <div class="row mt-3 pt-5">
                                    <div class="col-12 text-center">
                                        <button type="button" class="btn btn-primary btn-lg">
                                            <span>
                                                Finalizar meu Currículo
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascripts')
    <script src="{{ asset('js/vendor/select2.min.js') }}"></script>
{{--    <script src="{{ asset('js/viacep.js') }}"></script>--}}
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                theme: 'bootstrap4',
            });
            $('#deficiencia-false').change(function (e) {
                if (this.checked)
                {
                    $('#deficiencias-collapse').collapse('hide')
                }
            });
            $('#deficiencia-true').change(function (e) {
                if (this.checked)
                {
                    $('#deficiencias-collapse').collapse('show')
                }
            });

        });
        $('.date-month').mask('00/0000');
        $('.date').mask('00/00/0000');
    </script>
@endsection
