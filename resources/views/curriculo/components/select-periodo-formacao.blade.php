<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="turno">
        <span>*</span> Período
    </label>
    <select id="turno" class="form-control @error("formacoes.{$key}.turno")is-invalid @enderror"
            wire:key="formacao_{{$key}}" wire:model.lazy="formacoes.{{$key}}.turno" >
        <option value="Matutino">Matutino</option>
        <option value="Vespertino">Vespertino</option>
        <option value="Noturno">Noturno</option>
        <option value="Integral">Integral</option>
    </select>
    @error("formacoes.{$key}.turno")
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
