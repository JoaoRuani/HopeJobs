<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="estado_civil">
        <span>*</span> Estado Civil
    </label>
    <select id="estado_civil" class="form-control" name="estado_civil" >
        <option value="solteiro">Solteiro(a)</option>
        <option value="casado">Casado(a)</option>
        <option value="separado">Separado(a)</option>
        <option value="divorciado">Divorciado(a)</option>
        <option value="viuvo">Viúvo(a)</option>
    </select>
</div>
