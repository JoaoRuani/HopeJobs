<div class="form-row">
    <div class="form-group col-12 col-md-6">
        <label for="cep">
            <span>*</span> CEP</label>
        <input type="text" id="cep" wire:model.lazy="endereco.cep" wire:change="preencherFormulario" class="form-control
        @error('endereco.cep')is-invalid @enderror">
        @error('endereco.cep')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-6">
        <label for="logradouro">
            <span>*</span> Rua</label>
        <input type="text" id="logradouro" wire:loading.attr="disabled" wire:target="preencherFormulario" wire:model.lazy="endereco.logradouro" class="form-control
        @error('endereco.logradouro')is-invalid @enderror">
        @error('endereco.logradouro')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-4">
        <label for="numero">
            <span>*</span> Número
        </label>
        <input type="text" id="numero" wire:model.lazy="endereco.numero" class="form-control
        @error('endereco.numero')is-invalid @enderror">
        @error('endereco.numero')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-4">
        <label for="complemento">Complemento</label>
        <input type="text" id="complemento" wire:loading.attr="disabled" wire:target="preencherFormulario" wire:model.lazy="endereco.complemento" class="form-control">
    </div>
    <div class="form-group col-12 col-md-4">
        <label for="bairro"><span
            >*</span> Bairro
        </label>
        <input type="text" id="bairro" wire:loading.attr="disabled" wire:target="preencherFormulario" wire:model.lazy="endereco.bairro" class="form-control
        @error('endereco.bairro')is-invalid @enderror">
        @error('endereco.bairro')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-6">
        <label for="uf">
            <span>*</span> Estado
        </label>
        <input type="text" id="uf" wire:loading.attr="disabled" wire:target="preencherFormulario" wire:model.lazy="endereco.uf" class="form-control
        @error('endereco.uf')is-invalid @enderror">
        @error('endereco.uf')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group col-12 col-md-6">
        <label for="cidade">
            <span>*</span> Cidade</label>
        <input type="text" wire:loading.attr="disabled" wire:target="preencherFormulario" wire:model.lazy="endereco.cidade" id="cidade" class="form-control
        @error('endereco.cidade')is-invalid @enderror">
        @error('endereco.cidade')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
