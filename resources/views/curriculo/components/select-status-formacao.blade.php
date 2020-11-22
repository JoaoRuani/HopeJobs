<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="status">
        <span>*</span> Status
    </label>
    <select id="status" class="form-control" name="status" >
        <option value="Cursando">Cursando</option>
        <option value="Trancado">Trancado</option>
        <option value="Concluído">Concluído</option>
    </select>
</div>
