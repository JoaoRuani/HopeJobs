<div id="box-professional-experience">
    <div class="form-row">
        <div
            class="col-12 d-flex align-items-center flex-wrap mb-3 flex-column flex-sm-row text-center">
            <h5 class="text-blue-ml">* EXPERIÊNCIAS PROFISSIONAIS</h5>
        </div>
    </div>
    <div class="custom-control custom-checkbox">
        <input type="checkbox" id="sem-experiencia" class="custom-control-input" wire:model="naoPossuiExperiencia">
        <label for="sem-experiencia" class="custom-control-label">
            Não possuo experiência profissional
        </label>
    </div>
    @if(!$naoPossuiExperiencia)
    <div>
        @foreach($experiencias as $experiencia)
            <div class="form-area mt-4 mb-5">
                <form novalidate="novalidate">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="empresa{{$loop->index}}">
                                <span>*</span> Empresa
                            </label>
                            <input type="text" wire:key="experiencia_{{$loop->index}}" wire:model.lazy="experiencias.{{$loop->index}}.empresa" id="empresa{{$loop->index}}"
                                   class="form-control
                            @error("experiencias.{$loop->index}.empresa")is-invalid @enderror">
                            @error("experiencias.{$loop->index}.empresa")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="responsabilidades{{$loop->index}}">
                                <span>*</span> Responsabilidades
                            </label>
                            <textarea id="responsabilidades{{$loop->index}}" rows="5" wire:key="experiencia_{{$loop->index}}" wire:model.lazy="experiencias.{{$loop->index}}.descricao"
                                      class="form-control @error("experiencias.{$loop->index}.descricao")is-invalid @enderror"></textarea>
                            @error("experiencias.{$loop->index}.descricao")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="cargo{{$loop->index}}">
                                <span>*</span>Cargo
                            </label>
                            <input type="text" id="cargo{{$loop->index}}" wire:key="experiencia_{{$loop->index}}" wire:model.lazy="experiencias.{{$loop->index}}.cargo"
                                   class="form-control  @error("experiencias.{$loop->index}.cargo")is-invalid @enderror">
                            @error("experiencias.{$loop->index}.cargo")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <x-select-nivel-experiencia class="col-12 col-md-4" :key="$loop->index"/>
                        <x-select-area-experiencia class="col-12 col-md-4" :key="$loop->index"/>
                        <div class="form-group col-6 col-md-4 @if($experiencia->ehAtual)col-md-6 @endif">
                            <label for="inicio-experiencia{{$loop->index}}">
                                <span>*</span>
                                De
                            </label>
                            <input type="month" id="inicio-experiencia{{$loop->index}}" wire:key="experiencia_{{$loop->index}}" wire:model.debounce.2000ms="experiencias.{{$loop->index}}.inicio"
                                   class="form-control @error("experiencias.{$loop->index}.inicio")is-invalid @enderror">
                            @error("experiencias.{$loop->index}.inicio")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @if(!$experiencia->ehAtual)
                            <div class="form-group col-6 col-md-4">
                                <label for="saida-experiencia{{$loop->index}}">
                                    <span>*</span>
                                    Até
                                </label>
                                <input type="month" id="saida-experiencia{{$loop->index}}" wire:key="experiencia_{{$loop->index}}" wire:model.lazy.debounce.2000ms="experiencias.{{$loop->index}}.saida"
                                       class="form-control @error("experiencias.{$loop->index}.saida")is-invalid @enderror">
                                @error("experiencias.{$loop->index}.saida")
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        @endif
                        <div class="form-group col-12 col-md-4 @if($experiencia->ehAtual)col-md-6 @endif align-self-end">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" id="cargo-atual-experiencia{{$loop->index}}" wire:key="experiencia_{{$loop->index}}" wire:model="experiencias.{{$loop->index}}.ehAtual"
                                       class="custom-control-input">
                                <label
                                    for="cargo-atual-experiencia{{$loop->index}}"
                                    class="custom-control-label">
                                    Meu cargo atual
                                </label>
                            </div>
                        </div>
                    </div>
                    <p class="small text-right font-italic">
                        Campos com * são obrigatórios.
                    </p>
                    @if($loop->index > 0)
                        <button class="btn btn-outline-danger" type="button" wire:click="removerExperiencia">Remover Experiência</button>
                    @endif
                </form>
            </div>
        @endforeach
        <div class="d-flex mt-5">
            <button class="btn btn-outline-primary mx-auto btn-lg" wire:click="adicionarExperiencia">
                Adicionar Exp. Profissional
            </button>
        </div>
    </div>
    @endif
</div>
