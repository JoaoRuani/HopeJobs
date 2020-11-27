<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="nivel-idioma">
        <span>*</span> Nível
    </label>
    <select id="nivel-idioma" wire:key="idiomas_{{$key}}" wire:model="idiomas.{{$key}}.nivel"
            class="form-control @error("idiomas.$key.nivel")is-invalid @enderror">
        @foreach(\App\Enums\Curriculo\NivelIdioma::asSelectArray() as $value => $description)
            <option value="{{$value}}">{{$description}}</option>
        @endforeach
    </select>
    @error("idiomas.$key.nivel")
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
