<div class="input-avatar mb-4">
    <label for="">
                <span aria-label="Plus Circle icon" role="img"
                      class="material-design-icon plus-circle-icon">
                    <svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                         class="material-design-icon__svg">
                        <path
                            d="M17,13H13V17H11V13H7V11H11V7H13V11H17M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.48 17.52,2 12,2Z">
                            <title>Plus Circle icon</title>
                        </path>
                    </svg>
                </span>
            <input type="file" autocomplete="no" wire:model="tempImage" wire:change.debounce.2000ms="save">
        <span aria-label="Account Circle icon" role="img"
              class="material-design-icon account-circle-icon img">
            @if(isset($tempImage))
                <img src="{{ $tempImage->temporaryUrl() }}">
            @elseif(is_a($foto, \App\Models\Imagem::class))
                <img src="{{ Storage::url($foto->url) }}">
            @else
                <svg fill="currentColor" width="24" height="24" viewBox="0 0 24 24"
                     class="material-design-icon__svg">
                        <path
                            d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5C13.66,5 15,6.34 15,8C15,9.66 13.66,11 12,11C10.34,11 9,9.66 9,8C9,6.34 10.34,5 12,5M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.47 17.5,2 12,2Z">
                            <title>Account Circle icon</title>
                        </path>
                    </svg>
            @endif

                </span>
    </label>
</div>
