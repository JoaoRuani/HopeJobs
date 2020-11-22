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
                                <div id="box-personal-data">
                                    <div class="form-row">
                                        <div
                                            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">* DADOS PESSOAIS</h5>
                                            <!---->
                                        </div>
                                        <!---->
                                    </div>
                                    <div>
                                        <div class="form-area">
                                            <form novalidate="novalidate">
                                                <div class="form-row">
                                                    <div
                                                        class="form-group col-12 col-sm-6 col-md-3 firstname-container">
                                                        <label for="name">
                                                            <span>*</span> Nome
                                                        </label>
                                                        <input type="text" id="name" class="form-control">
                                                    </div>
                                                    <div
                                                        class="form-group col-12 col-sm-6 col-md-3 lastname-container">
                                                        <label for="personal-input-last-name1025"><span
                                                            >*</span> Sobrenome</label><input
                                                            type="text" id="personal-input-last-name1025"
                                                            class="form-control">
                                                    </div>
                                                    <div
                                                        class="form-group col-12 col-sm-6 email-container col-md-6">
                                                        <label
                                                            for="personal-input-email1025"><span
                                                            >*</span>
                                                            E-mail</label><input type="email"
                                                                                 id="personal-input-email1025"
                                                                                 class="form-control"></div>
                                                    <!---->
                                                    <x-select-paises class="col-12 col-sm-6 col-md-3 nationality-container"/>
                                                    <div
                                                        class="form-group col-12 col-sm-6 col-md-3 document-container">
                                                        <label for="personal-input-document1025"><span
                                                            >*</span> CPF</label><input
                                                            type="tel" id="personal-input-document1025"
                                                            class="form-control" readonly="true">
                                                    </div>
                                                    <div
                                                        class="form-group col-12 col-sm-6 col-md-3 phone-container">
                                                        <label
                                                            for="personal-input-phone1025"><span
                                                            >*</span>
                                                            Celular</label><input type="tel"
                                                                                  id="personal-input-phone1025"
                                                                                  class="form-control"></div>
                                                    <div
                                                        class="form-group col-12 col-sm-6 col-md-3 birthday-container">
                                                        <label for="personal-input-birthday1025"><span
                                                            >*</span> Data de Nascimento</label><input
                                                            type="tel" id="personal-input-birthday1025"
                                                            class="form-control">
                                                    </div>
                                                    <x-select-generos class="col-12 col-sm-6 col-md-6 gender-container"/>
                                                    <x-select-estado-civil class="col-12 col-sm-6 col-md-6 marital-status-container"/>
                                                    <!---->
                                                    <div class="form-group col-12">
                                                        <hr>
                                                    </div>
                                                    <div class="form-group col-12 d-flex flex-wrap">
                                                        <label class="mb-0 mr-3">
                                                            Possui alguma deficiência?
                                                        </label>
                                                        <div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input id="deficiencia-true" type="radio" class="custom-control-input"
                                                                       value="true" name="deficiencia">
                                                                <label for="deficiencia-true" class="custom-control-label">
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-radio custom-control-inline">
                                                                <input type="radio" id="deficiencia-false"
                                                                       class="custom-control-input" value="false" name="deficiencia">
                                                                <label for="deficiencia-false" class="custom-control-label">
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-12 collapse" id="deficiencias-collapse">
                                                        <div
                                                            class="row mx-0 d-flex align-items-center justify-content-between">
                                                            <div
                                                                class="col-12 col-sm-5 col-md-2 custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox"
                                                                       id="personal-input-disability-10251"
                                                                       class="custom-control-input" value="1"><label
                                                                    for="personal-input-disability-10251"
                                                                    class="custom-control-label">Auditiva</label>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-5 col-md-2 custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox"
                                                                       id="personal-input-disability-10252"
                                                                       class="custom-control-input" value="2"><label
                                                                    for="personal-input-disability-10252"
                                                                    class="custom-control-label">Visual</label>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-5 col-md-2 custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox"
                                                                       id="personal-input-disability-10253"
                                                                       class="custom-control-input" value="3"><label
                                                                    for="personal-input-disability-10253"
                                                                    class="custom-control-label">Intelectual/Mental</label>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-5 col-md-2 custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox"
                                                                       id="personal-input-disability-10254"
                                                                       class="custom-control-input" value="4"><label
                                                                    for="personal-input-disability-10254"
                                                                    class="custom-control-label">Física</label>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-5 col-md-2 custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox"
                                                                       id="personal-input-disability-10255"
                                                                       class="custom-control-input" value="5"><label
                                                                    for="personal-input-disability-10255"
                                                                    class="custom-control-label">Fala</label>
                                                            </div>
                                                            <div
                                                                class="col-12 col-sm-5 col-md-2 custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox"
                                                                       id="personal-input-disability-10256"
                                                                       class="custom-control-input" value="6"><label
                                                                    for="personal-input-disability-10256"
                                                                    class="custom-control-label">Outros</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <hr>
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="cep">
                                                            <span>*</span> CEP</label>
                                                        <input type="text" id="cep" name="cep" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="logradouro">
                                                            <span>*</span> Rua</label>
                                                        <input type="text" id="logradouro" name="logradouro" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="numero">
                                                            <span>*</span> Número
                                                        </label>
                                                        <input type="text" id="numero" name="numero" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="complemento">Complemento</label>
                                                        <input type="text" id="complemento" name="complemento" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="bairro"><span
                                                            >*</span> Bairro
                                                        </label>
                                                        <input type="text" id="bairro" name="bairro" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="uf">
                                                            <span>*</span> Estado
                                                        </label>
                                                        <input type="text" id="uf" name="uf" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="cidade">
                                                            <span>*</span> Cidade</label>
                                                        <input type="text" name="cidade" id="cidade" class="form-control" >
                                                    </div>
                                                </div>
                                                <p class="small text-right font-italic">Campos com * são
                                                    obrigatórios.</p>
                                                <!---->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                                <div id="box-education">
                                    <div class="form-row">
                                        <div class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">* FORMAÇÕES</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-area mb-5">
                                            <form novalidate="novalidate">
                                                <div class="form-row">
                                                    <x-select-nivel-formacao class="col-12 col-md-4"/>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="instituicao">
                                                            <span>*</span> Instituição
                                                        </label>
                                                        <input type="text" id="instituicao" name="instituicao" class="form-control" >
                                                    </div>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="curso">
                                                            <span>*</span> Curso
                                                        </label>
                                                        <input id="curso" type="text" name="curso" class="form-control">
                                                    </div>
                                                    <x-select-status-formacao class="col-12 col-md-6"/>
                                                    <div class="form-group col-12 col-md-6">
                                                        <label for="campus">
                                                            Campus
                                                        </label>
                                                        <input id="campus" type="text" name="campus" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="inicio">Início</label>
                                                        <input type="text" id="inicio" name="inicio" placeholder="Exemplo: 01/2010" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="fim">
                                                            <span>*</span> Previsão/Data de Conclusão
                                                        </label>
                                                        <input type="text" id="fim" name="fim" placeholder="Exemplo: 06/2012" class="form-control">
                                                    </div>
                                                    <x-select-periodo-formacao class="col-12 col-md-4"/>
                                                </div>
                                                <p class="small text-right font-italic">Campos com * são
                                                    obrigatórios.</p>
                                                <!---->
                                            </form>
                                            <!---->
                                        </div>
                                        <div class="d-flex">
                                            <button class="btn btn-outline-primary mx-auto btn-lg">
                                                Adicionar Formação
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                                <div id="box-professional-experience">
                                    <div class="form-row">
                                        <div
                                            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">* EXPERIÊNCIAS PROFISSIONAIS</h5>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="sem-experiencia"
                                               value="true" class="custom-control-input" name="sem-experiencia">
                                        <label for="sem-experiencia" class="custom-control-label">
                                            Não possuo experiência profissional
                                        </label>
                                    </div>
                                    <div>
                                        <div class="form-area mt-4 mb-5">
                                            <form novalidate="novalidate">
                                                <div class="form-row">
                                                    <div class="form-group col-12">
                                                        <label for="empresa">
                                                            <span>*</span> Empresa
                                                        </label>
                                                        <input type="text" name="empresa" id="empresa" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="responsabilidades">
                                                            <span>*</span> Responsabilidades
                                                        </label>
                                                        <textarea id="responsabilidades" rows="5"
                                                            required="required" name="responsabilidades" class="form-control">
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group col-12 col-md-4">
                                                        <label for="cargo">
                                                            <span>*</span>Cargo
                                                        </label>
                                                        <input type="text" id="cargo" name="cargo" class="form-control">
                                                    </div>
                                                    <x-select-nivel-experiencia class="col-12 col-md-4"/>
                                                    <x-select-area-experiencia class="col-12 col-md-4"/>
                                                    <div class="form-group col-6 col-md-4">
                                                        <label for="professional-input-date-from1094">
                                                            <span>*</span>
                                                            De
                                                        </label>
                                                        <input type="text"
                                                               id="professional-input-date-from1094"
                                                               placeholder="Exemplo: 06/2010"
                                                               required="required"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group col-6 col-md-4">
                                                        <label for="professional-input-date-to1094">
                                                            <span>*</span>
                                                            Até
                                                        </label>
                                                        <input type="text"
                                                               id="professional-input-date-to1094"
                                                               placeholder="Exemplo: 06/2011"
                                                               required="required"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group col-12 col-md-4 align-self-end">
                                                        <div class="custom-control custom-checkbox mb-2">
                                                            <input type="checkbox"
                                                                   id="professional-input-current-occupation1094"
                                                                   class="custom-control-input" value="true">
                                                            <label
                                                                for="professional-input-current-occupation1094"
                                                                class="custom-control-label">
                                                                Meu cargo atual
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="small text-right font-italic">
                                                    Campos com * são obrigatórios.
                                                </p>
                                            </form>
                                        </div>
                                        <div class="d-flex mt-5">
                                            <button class="btn btn-outline-primary mx-auto btn-lg">
                                                Adicionar Exp. Profissional
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                                <div id="box-language">
                                    <div class="form-row">
                                        <div
                                            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">IDIOMAS</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-area mb-5">
                                            <form novalidate="novalidate">
                                                <div class="form-row">
                                                    <x-select-idiomas class="col-12 col-md-6"/>
                                                    <x-select-nivel-idiomas class="col-12 col-md-6"/>
                                                </div>
                                                <p class="small text-right font-italic">
                                                    Campos com * são obrigatórios.
                                                </p>
                                            </form>
                                        </div>
                                        <div class="d-flex">
                                            <button class="btn btn-outline-primary mx-auto btn-lg">
                                                Adicionar Idioma
                                            </button>
                                        </div>
                                    </div>
                                </div>
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
    <script src="{{ asset('js/viacep.js') }}"></script>
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

    </script>
@endsection
