<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="turno">
        <span>*</span> Período
    </label>
    <select id="turno" class="form-control" name="turno" >
        <option value="Matutino">Matutino</option>
        <option value="Vespertino">Vespertino</option>
        <option value="Noturno">Noturno</option>
        <option value="Integral">Integral</option>
    </select>
</div>
