<!-- Button trigger modal -->
<!-- New Post Button -->
<div class='new-post-button'>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-post-modal">
				<i class='fa fa-plus'></i>
		</button>
</div>

<!-- Modal -->
<!-- New Post Modal -->
<div class="modal fade" id="new-post-modal" tabindex="-1" role="dialog" aria-labelledby="new-post-modal" aria-hidden="true">
	<form class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New Post</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class='form-group row'>
					<label for='options' class='col-2 col-form-label'>Options</label>
					<div class='col-10'>
						<input type='text' value='Anonymous' id='options' />
					</div>
				</div>
				<div class='form-group row'>
					<label for='subject' class='col-2 col-form-label'>Subject</label>
					<div class='col-10'>
						<input type='text' value='Anonymous' id='subject' />
					</div>
				</div>
				<div class='form-group row'>
					<label for='message' class='col-2 col-form-label'>Message</label>
					<div class='col-10'>
						<textarea id='message'></textarea>
					</div>
				</div>
				<div class='form-group row'>
					<label for='file' class='col-2 col-form-label'>File</label>
					<div class='col-10'>
						<input type='file' value='Anonymous' id='file' />
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>

				<button type='submit' class='btn btn-success'>Post</button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-post-modal">Close</button>
			</div>
		</div>
	</form>
</div>