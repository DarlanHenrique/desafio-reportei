 <!-- Modal -->
 <div class="modal fade" id="{{ $modal_id ?? 'modal' }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modal_id ?? 'modal' }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $title ?? null}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {{ $content ?? null }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            {{ $buttons ?? null}}
        </div>
      </div>
    </div>
  </div>