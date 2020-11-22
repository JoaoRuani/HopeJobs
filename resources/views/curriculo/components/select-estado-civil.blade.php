<div {{ $attributes->merge(['class' => 'form-group'])}}">
    <label for="estado_civil">
        <span>*</span> Estado Civil
    </label>
    <select id="estado_civil" class="form-control" wire:model="curriculo.estado_civil" >
        @foreach(\App\Enums\Curriculo\EstadosCivis::asSelectArray() as $value => $description)
        <option value="{{$value}}">{{$description   }}</option>
        @endforeach
    </select>
</div>
