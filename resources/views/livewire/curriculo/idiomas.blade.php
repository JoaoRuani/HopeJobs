<div id="box-language">
    <div class="form-row">
        <div
            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
            <h5 class="text-blue-ml">IDIOMAS</h5>
        </div>
    </div>
    <div>
        @foreach($idiomas as $idioma)
        <div class="form-area mb-5">
            <form novalidate="novalidate">
                <div class="form-row">
                    <x-select-idiomas class="col-12 col-md-6" :key="$loop->index"/>
                    <x-select-nivel-idiomas class="col-12 col-md-6" :key="$loop->index"/>
                </div>
                @if($loop->index > 0)
                    <button class="btn btn-outline-danger" type="button" wire:click="removerIdioma">Remover Formação</button>
                @endif
                <p class="small text-right font-italic">
                    Campos com * são obrigatórios.
                </p>
            </form>
        </div>
        @endforeach
        <div class="d-flex">
            <button class="btn btn-outline-primary mx-auto btn-lg" wire:click="adicionarIdioma">
                Adicionar Idioma
            </button>
        </div>
    </div>
</div>
