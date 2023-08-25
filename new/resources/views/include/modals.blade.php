<!-- MODALS ======================================================== -->
<form action="" method="POST" id="form-status-change">
@csrf
<div class="modal fade hide" id="requestStatusModal" tabindex="-1" aria-labelledby="requestStatusModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="requestStatusModalTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="approval_request_id" id="approval_request_id"/>
        <input type="hidden" name="status" id="status"/>
        
        <div class="mb-3">
          <label for="remarks" class="form-label">Your Notes</label>
          <textarea name="remarks" class="form-control" id="remarks" placeholder="(Optional)"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger p-2 px-3"  data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info p-2 px-3 text-white">Confirm</button>
      </div>
    </div>
  </div>
</div>
</form>
@yield("modal")
