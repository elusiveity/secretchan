<div class="jumbotron">
	<div class='text-center multi-collapse'>
		<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='.multi-collapse' aria-expanded='false' aria-controls='collapseExample'>
			Post a Thread
		</button>
	</div>
	<div class='container collapse multi-collapse' id='postblock'>
		<h1 class='display-4'>Post a Thread</h1>
		<hr class='my-4' />
		<form>
			<div class='form-group row'>
				<label for='options' class='col-2 col-form-label'>Options</label>
				<div class='col-10'>
					<input class='form-control' type='text' value='Anonymous' id='options' />
				</div>
			</div>
			<div class='form-group row'>
				<label for='subject' class='col-2 col-form-label'>Subject</label>
				<div class='col-10'>
					<input class='form-control' type='text' id='subject' />
				</div>
			</div>
			<div class='form-group row'>
				<label for='message' class='col-2 col-form-label'>Message</label>
				<div class='col-10'>
					<textarea class='form-control' type='text' id='message'></textarea>
				</div>
			</div>
			<div class='form-group row'>
				<label for='file' class='col-2 col-form-label'>File</label>
				<div class='col-10'>
					<input type='file' value='Anonymous' id='file' />
				</div>
			</div>
			<p class='text-right'>
				<button type='submit' class='btn btn-success'>Post</button>
				<button type='button' class='btn btn-danger' data-toggle='collapse' data-target='.multi-collapse' aria-expanded='false' aria-controls='collapseExample'>Close</button>
				<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#helpModal'>Help</button>
			</p>
			</div>
		</form>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="helpModalLabel">Options Help</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class='text-left'>
					Options are both seasonal and permanent. They can jazz up the look of your post, set your trips, return you to this post after posting and more. 
				</p>
				<p class='text-left'>
					We only inform users of options using posts which are <b>not</b> stickied. There posts <b>will</b> be lost in time. So if you're not an oldfag you won't know what's going on.
				</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
