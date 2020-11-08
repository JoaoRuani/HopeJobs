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
    <div class="container">
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
                        <div class="sidebar-menu shadow rounded-xl">
                            <div>
                                <div class="input-avatar mb-4">
                                    <label for="">
                                        <span aria-label="Plus Circle icon" role="img"
                                            class="material-design-icon plus-circle-icon">
                                            <svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                                class="material-design-icon__svg">
                                                <path
                                                    d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.48 17.52,2 12,2Z">
                                                    <title>Plus Circle icon</title>
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="file" autocomplete="no">
                                        <span aria-label="Account Circle icon" role="img"
                                            class="material-design-icon account-circle-icon img">
                                            <svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                                                class="material-design-icon__svg">
                                                <path
                                                    d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5C13.66,5 15,6.34 15,8C15,9.66 13.66,11 12,11C10.34,11 9,9.66 9,8C9,6.34 10.34,5 12,5M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.47 17.5,2 12,2Z">
                                                    <title>Account Circle icon</title>
                                                </path>
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                                <div>
                                    <div>
                                        <div role="dialog" aria-hidden="true" class="modal fade" style="display: none;">
                                            <div class="modal-dialog modal-md modal-dialog-centered">
                                                <div tabindex="-1" role="document"
                                                    aria-describedby="__BVID__122___BV_modal_body_" class="modal-content">
                                                    <!---->
                                                    <div id="__BVID__122___BV_modal_body_" class="modal-body">
                                                        <!---->
                                                        <div class="croppie-container"
                                                            style="position: relative; z-index: 0; height: auto;">
                                                            <div class="cr-boundary" aria-dropeffect="none"
                                                                style="width: 100%; height: 400px;"><canvas class="cr-image"
                                                                    alt="preview" aria-grabbed="false"></canvas>
                                                                <div class="cr-viewport cr-vp-square" tabindex="0"
                                                                    style="width: 200px; height: 200px;"></div>
                                                                <div class="cr-overlay"></div>
                                                            </div>
                                                            <div class="cr-slider-wrap"><input class="cr-slider"
                                                                    type="range" step="0.0001" aria-label="zoom"
                                                                    autocomplete="no"></div>
                                                        </div>
                                                        <div class="d-flex justify-content-center align-items-center mb-5">
                                                            <button class="btn btn-outline-blue-ml">Girar
                                                                Foto</button>
                                                        </div>
                                                        <div class="d-flex align-items-center"><button type="button"
                                                                class="btn btn-link mr-auto">Cancelar</button><button
                                                                type="button" class="btn btn-blue-ml">Salvar</button></div>
                                                    </div>
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <ul class="nav" id="scrollspy_curriculo">
                                <li class="nav-item">
                                    <a href="#box-personal-data" target="_self" class="nav-link">
                                        <span aria-label="Personal Data icon" role="img"
                                            class="material-design-icon account-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="29.5 28 24.764 31.621" class="material-design-icon__svg">
                                                <g fill="currentColor">
                                                    <path
                                                        d="M42.605 59.62c-3.52-.005-6.288-.269-8.945-1.2-.84-.295-1.654-.712-2.416-1.178-1.327-.814-1.886-2.025-1.714-3.602.521-4.76 2.83-8.309 7.181-10.357 6.991-3.29 15.132.609 17.126 8.148.234.89.314 1.826.41 2.746.117 1.153-.432 2.037-1.282 2.746-1.233 1.026-2.714 1.536-4.24 1.92-2.243.567-4.528.791-6.12.777M48.463 34.571c.006 3.641-2.947 6.604-6.582 6.602-3.621-.001-6.602-2.988-6.592-6.606.01-3.622 2.946-6.554 6.576-6.567a6.564 6.564 0 016.598 6.571">
                                                    </path>
                                                </g>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#box-education" target="_self" class="nav-link">
                                        <span aria-label="Education icon" role="img"
                                            class="material-design-icon account-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="27.5 28.414 34.701 23.368" class="material-design-icon__svg">
                                                <g fill="currentColor">
                                                    <path
                                                        d="M56.361 39.858v.362c0 2.498-.004 4.995.006 7.493 0 .207-.1.404-.27.522-2.544 1.772-5.344 2.912-8.412 3.339-5.161.717-9.89-.43-14.166-3.411-.095-.066-.187-.216-.187-.327-.01-2.596-.008-5.189-.007-7.785 0-.041.009-.083.018-.159l.735.258c2.497.891 4.995 1.778 7.49 2.674a9.578 9.578 0 006.466 0c2.642-.949 5.285-1.891 7.928-2.835l.175-.059.224-.072zM46.248 28.651a4700.39 4700.39 0 0115.123 5.373c.734.263 1.008.831.715 1.455-.147.314-.425.437-.724.543l-8.329 2.96c-2.533.9-3.722 1.313-6.252 2.222-1.545.535-2.594.497-4.301-.176-5.317-1.896-8.775-3.115-14.093-5.011-.243-.087-.505-.224-.665-.416a.907.907 0 01.31-1.421c.443-.214.917-.365 1.383-.532a3501.106 3501.106 0 0114.059-4.997 4.17 4.17 0 012.774 0zM60.389 38.427c0 1.319.004 2.588-.005 3.856-.001.221.054.364.235.514.654.539.712 1.572.154 2.27-.57.712-1.556.858-2.279.338a1.67 1.67 0 01-.283-2.49.79.79 0 00.212-.576c-.009-.979.001-1.958-.008-2.938-.002-.201.052-.302.257-.368.56-.18 1.111-.39 1.717-.606">
                                                    </path>
                                                </g>
                                            </svg></span></a>
                                </li>
                                <li class="nav-item"><a href="#box-professional-experience" target="_self"
                                        class="nav-link"><span aria-label="Professional Experience icon" role="img"
                                            class="material-design-icon account-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="30.56 28.32 26.658 23.121" class="material-design-icon__svg">
                                                <path fill="currentColor"
                                                    d="M50.082 46.996a.874.874 0 01-1.748 0v-1.785a.873.873 0 011.748 0v1.785zm-1.773-13.342h-8.856c0-.617-.004-1.229.002-1.84a1.69 1.69 0 01.063-.417c.199-.725.857-1.269 1.606-1.275 1.832-.014 3.665-.018 5.497 0 .916.009 1.655.76 1.685 1.678.018.613.003 1.227.003 1.854zm-8.891 13.334a.87.87 0 01-1.74 0v-1.783a.87.87 0 111.74 0v1.783zm17.785-9.781a3.525 3.525 0 00-3.537-3.54c-1.091-.003-2.182 0-3.272 0h-.292c0-.565.009-1.104-.002-1.644a4.74 4.74 0 00-.076-.868c-.365-1.681-1.784-2.821-3.52-2.829a539.827 539.827 0 00-5.247 0c-2.051.01-3.592 1.568-3.594 3.618v1.722c-.803 0-1.569-.006-2.335.002-.606.006-1.218-.014-1.819.053-1.556.176-2.935 1.705-2.941 3.274-.015 3.698-.007 7.395-.003 11.092.001.698.255 1.322.662 1.876.75 1.022 1.784 1.477 3.04 1.475 3.181-.005 6.362-.002 9.543-.002 3.239 0 6.479-.015 9.718.005 2.285.014 3.713-1.843 3.688-3.691-.044-3.514-.009-7.029-.013-10.543z">
                                                </path>
                                            </svg></span></a></li>
                                <li class="nav-item"><a href="#box-language" target="_self" class="nav-link"><span
                                            aria-label="Language icon" role="img"
                                            class="material-design-icon account-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="14.183 -0.062 483.634 512.079" fill="currentColor"
                                                class="material-design-icon__svg">
                                                <path
                                                    d="M497.617 84.21a89.746 89.746 0 00-2.034-20.703C486.43 24.97 454.958.036 415.005.036 308.935-.133 202.871-.085 96.814.182a83.963 83.963 0 00-26.278 4.032c-34.723 11.713-56.043 41.424-56.153 78.09-.266 76.274-.266 152.548 0 228.823.164 42.204 28.349 74.93 70.227 81.305 11.841 1.797 24.135.835 36.212.943 13.293.109 26.587 0 40.535 0-.545 5.721-.89 10.896-1.544 15.854a247.534 247.534 0 01-12.531 50.505 38.844 38.844 0 0012.331 42.604c12.949 10.896 30.709 13.003 44.875 4.213a420.522 420.522 0 0039.863-27.586c29.511-23.427 54.791-51.085 77.799-81.014a9.207 9.207 0 018.336-3.941c27.694.163 55.371.236 83.066 0a96.92 96.92 0 0021.139-2.216c34.995-8.263 63.344-39.299 63.126-81.994-.4-75.202-.055-150.405-.2-225.59zm-162.192 94.435c-5.738.327-11.514.254-17.252 0a6.555 6.555 0 00-6.175 3.396c-8.862 12.222-17.852 24.335-27.241 36.194-2.343 2.978-2.034 4.231.636 6.374a3610.355 3610.355 0 0137.266 30.383c12.113 10.043 10.751 27.24-2.634 34.977-6.755 3.924-14.655 3.088-21.901-2.705-11.713-9.316-23.3-18.814-34.922-28.24-2.58-2.088-5.322-4.031-7.683-6.356-2.742-2.669-4.74-2.088-7.718 0a2809.308 2809.308 0 01-49.469 34.396c-5.83 3.959-12.222 6.792-19.595 4.032-7.373-2.761-12.622-7.883-14.147-15.801a18.613 18.613 0 017.863-19.522c9.553-6.883 19.723-12.876 29.384-19.631 22.011-15.364 42.586-32.398 60.039-52.938.963-.999 1.834-2.216 3.523-4.395h-86.226c-8.281 0-15.273-2.688-19.613-9.988-5.91-9.447-3.042-21.896 6.404-27.806a20.173 20.173 0 0110.303-3.067c17.833-.526 35.704-.182 53.555-.2h5.866V111.07c-.199-11.402 8.882-20.807 20.284-21.006.515-.009 1.03.001 1.545.031 10.66.363 18.905 9.516 19.123 21.43.127 8.317 0 16.635.108 24.953.119.326.266.642.436.944 1.453 0 3.179.254 4.922.254 17.253 0 34.505-.091 51.739 0 12.005 0 20.631 7.573 21.684 18.342 1.162 12.022-7.519 21.937-20.104 22.627z">
                                                </path>
                                            </svg></span></a></li>
                                <!---->
                            </ul>
                        </div>
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
                                                    <p class="text-dark h5 font-weight-normal">João Ruani
                                                    </p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Gênero</h6>
                                                    <p class="text-dark h5 font-weight-normal">Homem</p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Nacionalidade</h6>
                                                    <p class="text-dark h5 font-weight-normal">Brasil</p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Estado Civíl</h6>
                                                    <p class="text-dark h5 font-weight-normal">
                                                        Solteiro(a)</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">CPF</h6><input type="tel"
                                                        readonly="readonly"
                                                        class="text-dark h5 font-weight-normal border-0 p-0">
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">RNE</h6><input type="tel"
                                                        readonly="readonly"
                                                        class="text-dark h5 font-weight-normal border-0 p-0">
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Data de Nascimento
                                                    </h6>
                                                    <p class="text-dark h5 font-weight-normal">03/11/2000
                                                    </p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Portador de
                                                        Deficiência</h6>
                                                    <p class="text-dark h5 font-weight-normal">Não</p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Celular</h6><input type="tel"
                                                        readonly="readonly"
                                                        class="text-dark h5 font-weight-normal border-0 p-0">
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">E-mail</h6>
                                                    <p class="text-dark h5 font-weight-normal">
                                                        jvitornegri@gmail.com</p>
                                                </div>
                                                <div class="mr-5 mb-4">
                                                    <h6 class="text-muted semi-small">Endereço</h6>
                                                    <p class="text-dark h5 font-weight-normal"><span>Rua João
                                                            Zamberlan</span><span>, 245</span>
                                                        <!----><span>, Jardim Tropical</span><span>, Presidente Prudente
                                                        </span><span> - SP</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <!---->
                                    </div>
                                    <!---->
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
                                            <div
                                                class="d-flex align-items-center justify-content-between justify-content-md-start">
                                                <div class="mr-3">
                                                    <h5 class="mb-0">Fatec</h5>
                                                    <p class="mb-0">
                                                        Graduação<span>,</span>
                                                        Análise e Desenvolvimento de Sistemas
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
                                                            </svg></span></button></div>
                                            </div>
                                            <p class="text-muted"><span>2018
                                                    -</span><span>
                                                    (Previsão de término em 2020)
                                                </span></p>
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
                                            <div
                                                class="d-flex align-items-center justify-content-between justify-content-md-start">
                                                <div class="mr-3">
                                                    <h5 class="mb-0">Professor de Informática</h5>
                                                    <p class="mb-0">Microcamp</p>
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
                                                2019
                                                <span>
                                                    - Atualmente
                                                    <small class="mx-1">●</small>
                                                    1 anos 8 meses
                                                </span>
                                            </p>
                                            <div>
                                                <h6>Responsabilidades</h6>
                                                <p>Pensar na melhor forma de lecionar o conteúdo ao aluno para que ele
                                                    continue no curso e com a sensação de que ele está p...</p>
                                            </div>
                                        </div>
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
