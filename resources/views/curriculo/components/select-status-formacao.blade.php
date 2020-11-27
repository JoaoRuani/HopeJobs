<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="status">
        <span>*</span> Status
    </label>
    <select id="status" class="form-control @error("formacoes.{$key}.status")is-invalid @enderror"
            wire:key="formacao_{{$key}}" wire:model="formacoes.{{$key}}.status" >
        @foreach(\App\Enums\Curriculo\StatusFormacao::asSelectArray() as $value => $description)
            <option value="{{$value}}">{{$description}}</option>
        @endforeach
    </select>
    @error("formacoes.{$key}.status")
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
