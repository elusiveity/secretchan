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
				<h5 class="modal-title" id="exampleModalLabel">New {if isset $parent}Thread{else}Reply{/if}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
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
				<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#helpModal'>Help</button>
			</div>
		</div>
	</form>
</div>

<!-- Modal -->
<!-- Post Help Modal -->
<div class="modal fade" id="post-help-modal" tabindex="-1" role="dialog" aria-labelledby="new-post-modal" aria-hidden="true">
	<form class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Post Help</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5>Options</h5>
				<p>Options are both seasonal and permanent. You can noko to return to thread, trip='' to specify your tripcode or stylify using announced style options.</p>
				<p>Options are announced and explained in unpinned threads, so you really have to keep an eye out for the easter eggs on the board.</p>
				<small>If you dont specify a trip code, you'll post as Anonymous</small>
				<hr />
				<h5>Subject</h5>
				<p>Required field to set the topic of the discussion.</p>
				<hr />
				<h5>Message</h5>
				<p>This is <b>required</b> for all new <b>threads</b>. This is <b>not required</b> for <b>replies</b> to threads.</p>
				<hr />
				<h5>File</h5>
				<p>This is <b>required</b> for all new <b>threads</b>. This is <b>not required</b> for <b>replies</b> to threads.</p>
				<p>We will eventually expand this, however for now you <b>must</b> specify a file from your local machine.</p>
				<p class='text-danger'>Your filename will be published.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#post-help-modal">Close</button>
			</div>
		</div>
	</form>
</div>