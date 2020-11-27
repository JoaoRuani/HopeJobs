<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="nivel-experiencia">
        <span>*</span> Nível
    </label>
    <select id="nivel-experiencia" class="form-control select2 @error("formacoes.{$key}.nivel")is-invalid @enderror"
            wire:key="experiencia_{{$key}}" wire:model.lazy="experiencias.{{$key}}.nivel" >
        <option value="assistente">Assistente</option>
        <option value="atendente">Atendente</option>
        <option value="autônomo">Autônomo</option>
        <option value="auxiliar">Auxiliar</option>
        <option value="c level">C Level</option>
        <option value="consultor">Consultor</option>
        <option value="coordenador">Coordenador</option>
        <option value="diretor">Diretor</option>
        <option value="especialista">Especialista</option>
        <option value="estágio">Estágio</option>
        <option value="freelancer">Freelancer</option>
        <option value="gerente">Gerente</option>
        <option value="jovem aprendiz">Jovem Aprendiz</option>
        <option value="júnior">Júnior</option>
        <option value="pleno">Pleno</option>
        <option value="sênior">Sênior</option>
        <option value="técnico">Técnico</option>
        <option value="tecnólogo">Tecnólogo</option>
        <option value="trainne">Trainee</option>
        <option value="voluntário">Voluntário</option>
    </select>
    @error("experiencias.{$key}.nivel")
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
