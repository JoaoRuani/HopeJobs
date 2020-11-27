<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="nivel">
        <span>*</span> Nível
    </label>
    <select id="nivel" class="form-control select2 @error("formacoes.{$key}.nivel")is-invalid @enderror"
            wire:key="formacao_{{$key}}" wire:model.lazy="formacoes.{{$key}}.nivel" >
        <option value="Ensino Fundamental">Ensino Fundamental</option>
        <option value="Ensino Médio">Ensino Médio</option>
        <option value="Técnico">Técnico</option>
        <option value="Graduação">Graduação</option>
        <option value="Pós-Graduação">Pós-Graduação</option>
        <option value="Especialização">Especialização</option>
        <option value="Mestrado">Mestrado</option>
        <option value="Doutorado">Doutorado</option>
        <option value="Pós-Doutorado">Pós-Doutorado</option>
        <option value="outro">Outro</option>
    </select>
    @error("formacoes.{$key}.nivel")
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
