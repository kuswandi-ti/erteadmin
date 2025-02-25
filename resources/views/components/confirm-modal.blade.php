<div class="modal fade dialogbox" id="{{ $id }}" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-icon text-{{ $type }}">
                <ion-icon name="help-circle-outline"></ion-icon>
            </div>
            <div class="modal-header">
                <h5 class="modal-title">{{ $headerTitle }}</h5>
            </div>
            <div class="modal-body">
                {{ $body }}
            </div>
            <div class="modal-footer">
                <div class="btn-inline">
                    <a href="#" class="btn btn-text-danger" data-bs-dismiss="modal">
                        {{ __('Batal') }}
                    </a>
                    <a href="#" class="btn btn-text-primary {{ $confirmId }}" id="{{ $confirmId }}"
                        data-bs-dismiss="modal">
                        {{ $confirmText }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
