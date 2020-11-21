@extends('layouts.app')
@section('styles')
    <link href="{{ asset('css/vendor/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/select2-bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form_curriculo.min.css') }}">
@endsection
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Seu currículo</h1>
      <p class="lead">Cadastre seu currículo e fique visível para as empresas</p>
    </div>
  </div>
    <div class="container-fluid">
        {{-- <main class="row">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
            </div>
            <form class="col-md-8">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="estado_civil">Estado Civil</label>
                        <select class="form-control" id="estado_civil" name="estado_civil">
                            <option value="solteiro">Solteiro(a)</option>
                            <option value="casado">Casado(a)</option>
                            <option value="separado">Viúvo(a)</option>
                            <option value="divorciado">Divorciado(a)</option>
                            <option value="separado">Separado(a) Judicialmente</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="genero">Genero</label>
                        <select class="form-control" id="genero" name="genero">
                            <option value="masculino">Masculino</option>
                            <option value="masculino-trans">Masculino Trans</option>
                            <option value="feminino-trans">Feminino Trans</option>
                            <option value="intergenero">Intergenero</option>
                            <option value="sem-genero">Sem Gênero</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="foto">Foto de perfil</label>
                        <input type="file" class="form-control-file" name="foto" id="foto">
                    </div>
                    @include('curriculo.select_paises')
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Prefiro não dizer</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar Currículo</button>
            </form>
        </main> --}}
        <div class="row pb-5">
            <div class="col-12 col-lg-10 mx-auto mt-n4">
                <div class="row">
                    <div class="col-2">
                        <x-curriculo-navigation />
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="bg-white shadow p-5 rounded-xl position-relative">
                            <div>
                                <div id="box-personal-data">
                                    <div class="form-row">
                                        <div
                                            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">* DADOS PESSOAIS</h5><button type="button"
                                                class="btn btn-white ml-0 ml-sm-auto text-blue-ml"><span
                                                    aria-label="Edit icon" role="img"
                                                    class="material-design-icon account-icon h2 my-1"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" class="material-design-icon__svg">
                                                        <g fill="currentColor" fill-rule="evenodd">
                                                            <path
                                                                d="M21.388 10.97v8.98c.001 1.535-.654 2.704-1.963 3.497a3.684 3.684 0 01-1.92.52c-1.702.008-3.406.004-5.108.004-2.799 0-5.597.01-8.395-.004-1.665-.009-2.884-.782-3.639-2.263-.266-.522-.362-1.094-.362-1.682.002-4.494-.006-8.989.005-13.483.004-1.897 1.27-3.432 3.123-3.826.273-.059.56-.075.84-.075 2.948-.005 5.894-.004 8.84-.003.049 0 .097.005.176.009-.056.064-.091.111-.133.153-.629.63-1.256 1.262-1.893 1.885a.488.488 0 01-.309.124c-2.198.007-4.395.006-6.593.006-.589 0-1.09.193-1.47.661-.277.34-.374.733-.374 1.163.002 3.526.001 7.052.002 10.578 0 .933-.005 1.866 0 2.799.006.842.478 1.465 1.28 1.68.182.048.377.062.566.062 4.423.004 8.847.004 13.27.003.893 0 1.575-.491 1.769-1.289.065-.268.105-.549.106-.824.008-2.106.006-4.212.002-6.317 0-.137.035-.236.135-.334.629-.62 1.251-1.247 1.876-1.871.042-.043.089-.081.169-.154">
                                                            </path>
                                                            <path
                                                                d="M21.48 4.954a32300.9 32300.9 0 00-2.41-2.411l-1.294 1.296 2.38 2.38 1.324-1.265M11.331 15.087l-2.447-2.448c-.196.2-.412.411-.618.634a.358.358 0 00-.073.206c-.043.62-.083 1.24-.117 1.86-.01.187-.002.375-.002.567.13 0 .25.005.368-.001.458-.025.916-.058 1.375-.078.793-.036.793-.034 1.362-.601.055-.055.115-.105.152-.14m-.723-4.033l2.39 2.39 5.53-5.623-2.392-2.392-5.528 5.625m-2.854 7.085c-.353.04-.82-.03-1.225-.34-.534-.408-.736-.967-.698-1.62.06-1.016.133-2.03.195-3.045.03-.5.21-.926.568-1.283 3.734-3.73 7.466-7.465 11.2-11.196.762-.762 1.788-.757 2.558.005.974.965 1.923 1.956 2.926 2.89.8.743.687 2.007.004 2.687-3.72 3.695-7.426 7.405-11.133 11.113-.397.396-.866.578-1.42.605-.946.046-1.89.115-2.975.184">
                                                            </path>
                                                        </g>
                                                    </svg></span></button>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex flex-wrap">
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Nome</h6>
                                                    <p class="text-dark h5 font-weight-normal text-capitalize">{{$curriculo->nomeCompleto()}}
                                                    </p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Gênero</h6>
                                                    <p class="text-dark h5 font-weight-normal text-capitalize">{{$curriculo->genero}}</p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Nacionalidade</h6>
                                                    <p class="text-dark h5 font-weight-normal text-capitalize">{{$curriculo->nacionalidade}}</p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Estado Civíl</h6>
                                                    <p class="text-dark h5 font-weight-normal text-capitalize">
                                                        {{$curriculo->estado_civil}}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Data de Nascimento
                                                    </h6>
                                                    <p class="text-dark h5 font-weight-normal">{{\Carbon\Carbon::parse($curriculo->data_nascimento)->format('d/m/Y')}}
                                                    </p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Portador de
                                                        Deficiência</h6>
                                                    <p class="text-dark h5 font-weight-normal">
                                                        @forelse ($curriculo->deficiencias as $deficiencia)
                                                            {{$deficiencia->tipo}}
                                                        @empty
                                                            Não
                                                        @endforelse
                                                    </p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Celular</h6>
                                                    <p class="text-dark h5 font-weight-normal">
                                                        @foreach ($curriculo->telefones as $telefone)
                                                            {{"($telefone->DDD) $telefone->numero  "}}
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">E-mail</h6>
                                                    <p class="text-dark h5 font-weight-normal">
                                                        {{$user->email}}</p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Endereço</h6>
                                                    <p class="text-dark h5 font-weight-normal"><span>{{$curriculo->endereco->logradouro}}</span>
                                                        <span>, {{$curriculo->endereco->numero}}</span>
                                                        <span>, {{$curriculo->endereco->bairro}}</span><span>, {{$curriculo->endereco->cidade}}
                                                        </span><span> - {{$curriculo->endereco->estado }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                                <div id="box-education">
                                    <div class="form-row">
                                        <div
                                            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">* FORMAÇÕES</h5><button type="button"
                                                class="btn btn-outline-blue-ml ml-0 ml-sm-auto">
                                                Adicionar Formação
                                            </button>
                                        </div>
                                        <div class="col-12 mb-4">
                                            @foreach ($curriculo->formacoes as $formacao)
                                                <div
                                                    class="d-flex align-items-center justify-content-between justify-content-md-start">
                                                    <div class="mr-3">
                                                        <h5 class="mb-0 text-capitalize">{{$formacao->instituicao}}</h5>
                                                        <p class="mb-0 text-capitalize">
                                                            {{$formacao->nivel}}<span>,</span>
                                                            {{$formacao->curso}}
                                                        </p>
                                                    </div>
                                                    <div role="group" class="btn-group"><button type="button"
                                                            class="btn btn-light"><span aria-label="Pencil icon" role="img"
                                                                class="material-design-icon pencil-icon align-text-bottom text-blue-ml"><svg
                                                                    fill="currentColor" width="24" height="24"
                                                                    viewBox="0 0 24 24" class="material-design-icon__svg">
                                                                    <path
                                                                        d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z">
                                                                        <title>Pencil icon</title>
                                                                    </path>
                                                                </svg></span></button><button type="button"
                                                            class="btn btn-light"><span aria-label="Delete icon" role="img"
                                                                class="material-design-icon delete-icon align-text-bottom text-blue-ml"><svg
                                                                    fill="currentColor" width="24" height="24"
                                                                    viewBox="0 0 24 24" class="material-design-icon__svg">
                                                                    <path
                                                                        d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19C6,20.1 6.9,21 8,21H16C17.1,21 18,20.1 18,19V7H6V19Z">
                                                                        <title>Delete icon</title>
                                                                    </path>
                                                                </svg></span></button>
                                                        </div>
                                                </div>
                                                <p class="text-muted">
                                                    <span>{{Carbon\Carbon::createFromFormat('Y-m-d', $formacao->inicio)->year}} -</span>
                                                    <span>{{
                                                        $formacao->cursando ?
                                                        '(Previsão de término em '.Carbon\Carbon::createFromFormat('Y-m-d', $formacao->fim)->year.')' :
                                                        Carbon\Carbon::createFromFormat('Y-m-d', $formacao->fim)->year}}
                                                    </span>
                                                </p>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div>
                                        <!---->
                                    </div>
                                    <!---->
                                </div>
                                <div class="py-4"></div>
                                <div id="box-professional-experience">
                                    <div class="form-row">
                                        <div
                                            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">* EXPERIÊNCIAS PROFISSIONAIS</h5><button type="button"
                                                class="btn btn-outline-blue-ml ml-0 ml-sm-auto">
                                                Adicionar Exp. Profissional
                                            </button>
                                        </div>
                                        <div class="col-12 mb-4">
                                            @foreach($curriculo->experiencias as $experiencia)
                                            <div
                                                class="d-flex align-items-c enter justify-content-between justify-content-md-start">
                                                <div class="mr-3">
                                                    <h5 class="mb-0">{{$experiencia->cargo}}</h5>
                                                    <p class="mb-0">{{$experiencia->empresa}}</p>
                                                </div>
                                                <div role="group" class="btn-group"><button type="button"
                                                        class="btn btn-light"><span aria-label="Pencil icon" role="img"
                                                            class="material-design-icon pencil-icon align-text-bottom text-blue-ml"><svg
                                                                fill="currentColor" width="24" height="24"
                                                                viewBox="0 0 24 24" class="material-design-icon__svg">
                                                                <path
                                                                    d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z">
                                                                    <title>Pencil icon</title>
                                                                </path>
                                                            </svg></span></button><button type="button"
                                                        class="btn btn-light"><span aria-label="Delete icon" role="img"
                                                            class="material-design-icon delete-icon align-text-bottom text-blue-ml"><svg
                                                                fill="currentColor" width="24" height="24"
                                                                viewBox="0 0 24 24" class="material-design-icon__svg">
                                                                <path
                                                                    d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19C6,20.1 6.9,21 8,21H16C17.1,21 18,20.1 18,19V7H6V19Z">
                                                                    <title>Delete icon</title>
                                                                </path>
                                                            </svg></span></button></div>
                                            </div>
                                            <p class="text-muted">
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d', $experiencia->inicio)->year }}
                                                <span>
                                                    - {{ $experiencia->saida == null ? "Atualmente" : Carbon\Carbon::createFromFormat('Y-m-d', $experiencia->saida)->year }}
                                                    <small class="mx-1">●</small>
                                                    {{\App\Helpers\DateHelper::DiffHumanWithoutPosition($experiencia->inicio, $experiencia->saida, 'Y-m-d')}}
                                                </span>
                                            </p>
                                            <div>
                                                <h6>Responsabilidades</h6>
                                                <p>{{$experiencia->descricao}}</p>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <!---->
                                    <div>
                                        <div id="__BVID__141___BV_modal_outer_">
                                            <div id="__BVID__141" role="dialog" aria-hidden="true" class="modal fade"
                                                style="display: none;">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div tabindex="-1" role="document"
                                                        aria-describedby="__BVID__141___BV_modal_body_"
                                                        class="modal-content">
                                                        <!---->
                                                        <div id="__BVID__141___BV_modal_body_" class="modal-body">
                                                            <div class="py-4 px-2 px-lg-4">
                                                                <h4 class="text-blue-ml mb-4">EXPERIÊNCIA PROFISSIONAL</h4>
                                                                <button type="button" class="ml-auto close"><span
                                                                        aria-label="Close icon" role="img"
                                                                        class="material-design-icon close-icon h4 my-0 ml-auto"><svg
                                                                            fill="currentColor" width="24" height="24"
                                                                            viewBox="0 0 24 24"
                                                                            class="material-design-icon__svg">
                                                                            <path
                                                                                d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                                                                                <title>Close icon</title>
                                                                            </path>
                                                                        </svg></span></button>
                                                                <form data-v-2ddf7319="" novalidate="novalidate">
                                                                    <!---->
                                                                    <div data-v-2ddf7319="" class="form-row">
                                                                        <div data-v-2ddf7319="" class="form-group col-12">
                                                                            <label data-v-2ddf7319=""
                                                                                for="professional-input-company144-selectized"><span
                                                                                    data-v-2ddf7319="">*</span>
                                                                                Empresa</label><select data-v-2ddf7319=""
                                                                                id="professional-input-company144"
                                                                                tabindex="-1" class="selectized"
                                                                                style="display: none;">
                                                                                <option value="" selected="selected">
                                                                                </option>
                                                                            </select>
                                                                            <div class="selectize-control single">
                                                                                <div
                                                                                    class="selectize-input items required has-options invalid not-full">
                                                                                    <input type="text" autocomplete="off"
                                                                                        tabindex="0"
                                                                                        id="professional-input-company144-selectized"
                                                                                        required=""
                                                                                        style="width: 4px; opacity: 1; position: relative; left: 0px;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div data-v-2ddf7319="" class="form-group col-12">
                                                                            <label data-v-2ddf7319=""
                                                                                for="professional-input-responsabilities144"><span
                                                                                    data-v-2ddf7319="">*</span>
                                                                                Responsabilidades</label><textarea
                                                                                data-v-2ddf7319=""
                                                                                id="professional-input-responsabilities144"
                                                                                rows="5" required="required"
                                                                                class="form-control"></textarea>
                                                                        </div>
                                                                        <div data-v-2ddf7319=""
                                                                            class="form-group col-12 col-md-4"><label
                                                                                data-v-2ddf7319=""
                                                                                for="professional-input-role144"><span
                                                                                    data-v-2ddf7319="">*</span>
                                                                                Cargo</label><input data-v-2ddf7319=""
                                                                                type="text" id="professional-input-role144"
                                                                                required="required" class="form-control">
                                                                        </div>
                                                                        <div data-v-2ddf7319=""
                                                                            class="form-group col-12 col-md-4"><label
                                                                                data-v-2ddf7319=""
                                                                                for="professional-input-level144-selectized"><span
                                                                                    data-v-2ddf7319="">*</span>
                                                                                Nível</label><select data-v-2ddf7319=""
                                                                                id="professional-input-level144"
                                                                                tabindex="-1" class="selectized"
                                                                                style="display: none;">
                                                                                <option value="" selected="selected">
                                                                                </option>
                                                                            </select>
                                                                            <div class="selectize-control single">
                                                                                <div
                                                                                    class="selectize-input items required has-options invalid not-full">
                                                                                    <input type="text" autocomplete="off"
                                                                                        tabindex="0"
                                                                                        id="professional-input-level144-selectized"
                                                                                        required=""
                                                                                        style="width: 4px; opacity: 1; position: relative; left: 0px;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div data-v-2ddf7319=""
                                                                            class="form-group col-12 col-md-4"><label
                                                                                data-v-2ddf7319=""
                                                                                for="professional-input-area144-selectized"><span
                                                                                    data-v-2ddf7319="">*</span>
                                                                                Área</label><select data-v-2ddf7319=""
                                                                                id="professional-input-area144"
                                                                                tabindex="-1" class="selectized"
                                                                                style="display: none;">
                                                                                <option value="" selected="selected">
                                                                                </option>
                                                                            </select>
                                                                            <div class="selectize-control single">
                                                                                <div
                                                                                    class="selectize-input items required has-options invalid not-full">
                                                                                    <input type="text" autocomplete="off"
                                                                                        tabindex="0"
                                                                                        id="professional-input-area144-selectized"
                                                                                        required=""
                                                                                        style="width: 4px; opacity: 1; position: relative; left: 0px;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div data-v-2ddf7319=""
                                                                            class="form-group col-6 col-md-4"><label
                                                                                data-v-2ddf7319=""
                                                                                for="professional-input-date-from144"><span
                                                                                    data-v-2ddf7319="">*</span>
                                                                                De</label><input data-v-2ddf7319=""
                                                                                type="text"
                                                                                id="professional-input-date-from144"
                                                                                placeholder="Exemplo: 06/2010"
                                                                                required="required" class="form-control">
                                                                        </div>
                                                                        <div data-v-2ddf7319=""
                                                                            class="form-group col-6 col-md-4"><label
                                                                                data-v-2ddf7319=""
                                                                                for="professional-input-date-to144"><span
                                                                                    data-v-2ddf7319="">*</span>
                                                                                Até</label><input data-v-2ddf7319=""
                                                                                type="text"
                                                                                id="professional-input-date-to144"
                                                                                placeholder="Exemplo: 06/2011"
                                                                                required="required" class="form-control">
                                                                            <!---->
                                                                        </div>
                                                                        <div data-v-2ddf7319=""
                                                                            class="form-group col-12 col-md-4 align-self-end">
                                                                            <div data-v-2ddf7319=""
                                                                                class="custom-control custom-checkbox mb-2">
                                                                                <input data-v-2ddf7319="" type="checkbox"
                                                                                    id="professional-input-current-occupation144"
                                                                                    class="custom-control-input"
                                                                                    value="true"><label data-v-2ddf7319=""
                                                                                    for="professional-input-current-occupation144"
                                                                                    class="custom-control-label">Meu cargo
                                                                                    atual</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p data-v-2ddf7319=""
                                                                        class="small text-right font-italic">Campos com *
                                                                        são obrigatórios.</p>
                                                                    <div data-v-2ddf7319=""
                                                                        class="d-flex align-items-center mt-4"><button
                                                                            data-v-2ddf7319="" type="reset"
                                                                            class="btn btn-light mr-auto">Cancelar</button><button
                                                                            data-v-2ddf7319="" type="submit"
                                                                            class="btn btn-blue-ml">Salvar</button></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                <div class="py-4"></div>
                                <div id="box-language">
                                    <div class="form-row">
                                        <div
                                            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
                                            <h5 class="text-blue-ml">IDIOMAS</h5><button type="button"
                                                class="btn btn-outline-blue-ml ml-0 ml-sm-auto">
                                                Adicionar Idioma
                                            </button>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <div
                                                class="d-flex align-items-center justify-content-between justify-content-md-start">
                                                <div class="mr-3">
                                                    <h5 class="mb-0">Inglês</h5>
                                                    <p class="mb-0">Intermediário</p>
                                                </div>
                                                <div role="group" class="btn-group"><button type="button"
                                                        class="btn btn-light"><span aria-label="Pencil icon" role="img"
                                                            class="material-design-icon pencil-icon align-text-bottom text-blue-ml"><svg
                                                                fill="currentColor" width="24" height="24"
                                                                viewBox="0 0 24 24" class="material-design-icon__svg">
                                                                <path
                                                                    d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z">
                                                                    <title>Pencil icon</title>
                                                                </path>
                                                            </svg></span></button><button type="button"
                                                        class="btn btn-light"><span aria-label="Delete icon" role="img"
                                                            class="material-design-icon delete-icon align-text-bottom text-blue-ml"><svg
                                                                fill="currentColor" width="24" height="24"
                                                                viewBox="0 0 24 24" class="material-design-icon__svg">
                                                                <path
                                                                    d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19C6,20.1 6.9,21 8,21H16C17.1,21 18,20.1 18,19V7H6V19Z">
                                                                    <title>Delete icon</title>
                                                                </path>
                                                            </svg></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div id="__BVID__162___BV_modal_outer_">
                                            <div id="__BVID__162" role="dialog" aria-hidden="true" class="modal fade"
                                                style="display: none;">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div tabindex="-1" role="document"
                                                        aria-describedby="__BVID__162___BV_modal_body_"
                                                        class="modal-content">
                                                        <!---->
                                                        <div id="__BVID__162___BV_modal_body_" class="modal-body">
                                                            <div class="py-4 px-2 px-lg-4">
                                                                <h4 class="text-blue-ml mb-4">IDIOMA</h4>
                                                                <button type="button" class="ml-auto close"><span
                                                                        aria-label="Close icon" role="img"
                                                                        class="material-design-icon close-icon h4 my-0 ml-auto"><svg
                                                                            fill="currentColor" width="24" height="24"
                                                                            viewBox="0 0 24 24"
                                                                            class="material-design-icon__svg">
                                                                            <path
                                                                                d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z">
                                                                                <title>Close icon</title>
                                                                            </path>
                                                                        </svg></span></button>
                                                                <form novalidate="novalidate">
                                                                    <!---->
                                                                    <div class="form-row">
                                                                        <div class="form-group col-12 col-md-6"><label
                                                                                for="language-input-language165-selectized"><span>*</span>
                                                                                Idioma</label><select
                                                                                id="language-input-language165"
                                                                                tabindex="-1" class="selectized"
                                                                                style="display: none;">
                                                                                <option value="" selected="selected">
                                                                                </option>
                                                                            </select>
                                                                            <div class="selectize-control single">
                                                                                <div
                                                                                    class="selectize-input items required has-options invalid not-full">
                                                                                    <input type="text" autocomplete="off"
                                                                                        tabindex="0"
                                                                                        id="language-input-language165-selectized"
                                                                                        required=""
                                                                                        style="width: 4px; opacity: 1; position: relative; left: 0px;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-12 col-md-6"><label
                                                                                for="language-input-proficiency165-selectized"><span>*</span>
                                                                                Nível</label><select
                                                                                id="language-input-proficiency165"
                                                                                tabindex="-1" class="selectized"
                                                                                style="display: none;">
                                                                                <option value="" selected="selected">
                                                                                </option>
                                                                            </select>
                                                                            <div class="selectize-control single">
                                                                                <div
                                                                                    class="selectize-input items required has-options invalid not-full">
                                                                                    <input type="text" autocomplete="off"
                                                                                        tabindex="0"
                                                                                        id="language-input-proficiency165-selectized"
                                                                                        required=""
                                                                                        style="width: 4px; opacity: 1; position: relative; left: 0px;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="small text-right font-italic">Campos com *
                                                                        são obrigatórios.</p>
                                                                    <div class="d-flex align-items-center mt-4"><button
                                                                            type="reset"
                                                                            class="btn btn-light mr-auto">Cancelar</button><button
                                                                            type="submit"
                                                                            class="btn btn-blue-ml">Salvar</button></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                <div class="row mt-3 pt-5">
                                    <div class="col-12 text-center"><button type="button"
                                            class="btn btn-lg btn-blue-ml"><span>Deixar meu Currículo</span></button></div>
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
    <script>
        $(document).ready(function() {
            $('#naturalidade').select2({
                theme: 'bootstrap4',
            });
        });

    </script>
@endsection
