<div class="modal" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
				{{ csrf_field() }} {{ method_field('POST') }}
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="modal-tittle"></h3>
				</div>

				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Name</label>
						<div class="col-md-6">
							<input type="text" name="name" id="name" class="form-control" autofocus required>
							<span class="help-block with-errors"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email">Email</label>
						<div class="col-md-6">
							<input type="email" name="email" id="email" class="form-control" autofocus required>
							<span class="help-block with-errors"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="photo">Upload Foto</label>
						<div class="col-md-6">
							<input type="file" name="photo" id="photo" class="form-control">
							<span class="help-block with-errors"></span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary btn-save">Submit</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>