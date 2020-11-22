<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="genero">
        <span>*</span> Gênero
    </label>
    <select id="genero" class="form-control" name="genero" >
        <option value="homem">Homem</option>
        <option value="mulher">Mulher</option>
        <option value="homem trans">Homem Trans</option>
        <option value="mulher trans">Mulher Trans</option>
        <option value="intergênero">Intergênero</option>
        <option value="sem gênero">Sem Gênero</option>
    </select>
</div>
