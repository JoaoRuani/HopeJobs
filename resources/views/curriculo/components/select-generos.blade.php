<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="genero">
        <span>*</span> Gênero
    </label>
    <select id="genero" class="form-control" wire:model="curriculo.genero" >
        @foreach(\App\Enums\Curriculo\Generos::asSelectArray() as $value => $description)
            <option value="{{$value}}">{{$description}}</option>
        @endforeach
    </select>
</div>
