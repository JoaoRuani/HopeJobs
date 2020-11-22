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
                    <div class="form-group col-12 col-sm-6 col-md-3 firstname-container">
                        <label for="name">
                            <span>*</span> Nome
                        </label>
                        <input type="text" wire:model.lazy="curriculo.nome" id="name" class="form-control
                        @error('curriculo.nome')is-invalid @enderror">
                        @error('curriculo.nome')
                            <div class="invalid-feedback">
                                 {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div
                        class="form-group col-12 col-sm-6 col-md-3 lastname-container">
                        <label for="sobrenome">
                            <span>*</span> Sobrenome
                        </label>
                        <input type="text" wire:model.lazy="curriculo.sobrenome" id="sobrenome" class="form-control
                        @error('curriculo.sobrenome')is-invalid @enderror">
                        @error('curriculo.sobrenome')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-sm-6 email-container col-md-6">
                        <label for="email">
                            <span>*</span> E-mail
                        </label>
                        <input type="email" id="email" class="form-control" disabled value="{{$user->email}}">
                    </div>
                    <!---->
                    <x-select-paises model="curriculo.nacionalidade" class="col-12 col-sm-6 col-md-4 nationality-container"/>
                    <div class="form-group col-12 col-sm-6 col-md-4 phone-container">
                        <div class="form-row">
                            <div class="col-4 form-group">
                                <label for="ddd">
                                    <span>*</span> DDD
                                </label>
                                <input type="text" wire:model.lazy="telefone.ddd" id="ddd" class="form-control
                            @error('telefone.ddd')is-invalid @enderror">
                                @error('telefone.ddd')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-8 form-group">
                                <label for="numero-telefone">
                                    <span>*</span> Telefone
                                </label>
                                <input type="tel" wire:model.lazy="telefone.numero" id="numero-telefone" class="form-control
                                @error('telefone.numero')is-invalid @enderror">
                                @error('telefone.numero')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div
                        class="form-group col-12 col-sm-6 col-md-4 birthday-container">
                        <label for="data_nascimento">
                            <span>*</span> Data de Nascimento
                        </label>
                        <input type="date" wire:model.lazy="curriculo.data_nascimento" id="data_nascimento" class="form-control">
                    </div>
                    <x-select-generos class="col-12 col-sm-6 col-md-6 gender-container"/>
                    <x-select-estado-civil class="col-12 col-sm-6 col-md-6 marital-status-container"/>
                    <!---->
                    <div class="form-group col-12">
                        <hr>
                    </div>
                        <livewire:curriculo.deficiencias />
                    <div class="form-group col-12">
                        <hr>
                    </div>
                        <livewire:curriculo.endereco />
                </div>
                <p class="small text-right font-italic">Campos com * são
                    obrigatórios.</p>
                <!---->
            </form>
        </div>
    </div>
</div>
