<div>
    <div class="form-group col-12 d-flex flex-wrap">
        <label class="mb-0 mr-3">
            Possui alguma deficiência?
        </label>
        <div>
            <div class="custom-control custom-radio custom-control-inline">
                <input id="deficiencia-true" type="radio" class="custom-control-input"
                       value="true" name="possuiDeficiencia" wire:model="possuiDeficiencia">
                <label for="deficiencia-true" class="custom-control-label">
                    Sim
                </label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="deficiencia-false"
                       class="custom-control-input" value="false" name="possuiDeficiencia" wire:model="possuiDeficiencia">
                <label for="deficiencia-false" class="custom-control-label">
                    Não
                </label>
            </div>
        </div>
    </div>
    <div class="form-group col-12 collapse @if($possuiDeficiencia == 'true') show @endif" id="deficiencias-collapse">
        <div class="row mx-0 d-flex align-items-center justify-content-between">
            @foreach(\App\Enums\Curriculo\TiposDeficiencia::asSelectArray() as $value => $description)
                <div class="col-12 col-sm-5 col-md-2 custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" id="deficiencia-{{$value}}"
                           class="custom-control-input" value="{{$value}}" wire:model="deficienciasSelecionadas">
                    <label for="deficiencia-{{$value}}" class="custom-control-label">{{$description}}</label>
                </div>
            @endforeach
        </div>
    </div>
</div>
