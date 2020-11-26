<div id="box-education">
    <div class="form-row">
        <div class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
            <h5 class="text-blue-ml">* FORMAÇÕES</h5>
        </div>
    </div>
    <div>
        @foreach($formacoes as $formacao)
        <div class="form-area mb-5">
            <form novalidate="novalidate">
                <div class="form-row">
                    <x-select-nivel-formacao class="col-12 col-md-4" :key="$loop->index"/>
                    <div class="form-group col-12 col-md-4">
                        <label for="instituicao">
                            <span>*</span> Instituição
                        </label>
                        <input type="text" id="instituicao" wire:key="formacao_{{$loop->index}}" wire:model.lazy="formacoes.{{$loop->index}}.instituicao"
                               class="form-control
                                 @error("formacoes.{$loop->index}.instituicao")is-invalid @enderror">
                                @error("formacoes.{$loop->index}.instituicao")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                    </div>
                    <div class="form-group col-12 col-md-4">
                        <label for="curso">
                            <span>*</span> Curso
                        </label>
                        <input id="curso" type="text" wire:key="formacao_{{$loop->index}}" wire:model.lazy="formacoes.{{$loop->index}}.curso"
                               class="form-control
                                @error("formacoes.{$loop->index}.curso")is-invalid @enderror">
                                @error("formacoes.{$loop->index}.curso")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                    </div>
                    <x-select-status-formacao class="col-12 col-md-6" :key="$loop->index"/>
                    @if($formacao->status->is(\App\Enums\Curriculo\StatusFormacao::Cursando))
                        <div class="form-group col-12 col-md-6">
                            <label for="campus">
                                Campus
                            </label>
                            <input id="campus" type="text" wire:key="formacao_{{$loop->index}}" wire:model.lazy="formacoes.{{$loop->index}}.campus"
                                   class="form-control
                            @error("formacoes.{$loop->index}.campus")is-invalid @enderror">
                            @error("formacoes.{$loop->index}.campus")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    @endif
                    <div class="form-group col-12 col-md-4
                        @if(!$formacao->status->is(\App\Enums\Curriculo\StatusFormacao::Cursando))
                            col-md-6
                        @endif">
                        <label for="inicio">Início</label>
                        <input type="month" id="inicio" wire:key="formacao_{{$loop->index}}" wire:model.lazy.debounce.2000ms="formacoes.{{$loop->index}}.inicio"
                               class="form-control
                                @error("formacoes.{$loop->index}.inicio")is-invalid @enderror">
                                @error("formacoes.{$loop->index}.inicio")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                    </div>
                    @if(!$formacao->status->is(\App\Enums\Curriculo\StatusFormacao::Trancado))
                        <div class="form-group col-12 col-md-4 @if($formacao->status->is(\App\Enums\Curriculo\StatusFormacao::Concluido))col-md-12 @endif">
                            <label for="fim">
                                <span>*</span> Previsão/Data de Conclusão
                            </label>
                            <input type="month" id="fim" wire:key="formacao_{{$loop->index}}-fim" wire:model.lazy.debounce.2000ms="formacoes.{{$loop->index}}.previsao_fim"
                                   class="form-control
                                    @error("formacoes.{$loop->index}.previsao_fim")is-invalid @enderror">
                                    @error("formacoes.{$loop->index}.previsao_fim")
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                        </div>
                    @endif
                    @if($formacao->status->is(\App\Enums\Curriculo\StatusFormacao::Cursando))
                        <x-select-periodo-formacao class="col-12 col-md-4" :key="$loop->index"/>
                    @endif
                </div>
                <p class="small text-right font-italic">Campos com * são
                    obrigatórios.</p>
                <!---->
                @if($loop->index > 0)
                    <button class="btn btn-outline-danger" type="button" wire:click="removerFormacao">Remover Formação</button>
                @endif
            </form>
            <!---->
        </div>
        @endforeach
        <div class="d-flex">
            <button class="btn btn-outline-primary mx-auto btn-lg" wire:click="adicionarFormacao">
                Adicionar Formação
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('message.received', (message, component) => {console.log(component)});
    });
</script>
