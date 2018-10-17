<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
         
          <div class="section-title-divider"></div>
		  <p class="section-description">Manage your profile details </p>
         </div>
      </div>
	  <form id="edit" method="post" action="patient/saveprofile.php" role="form" style="padding-left: 100px;">


                        <div class="messages"></div>

                        <div class="controls">
						<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_name">ID NO*</label>
                                        <input id="form_name" type="text" name="idno" class="form-control" placeholder="ID No" required="required" data-error="Required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								</div>

								
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_password">Address*</label>
                                        <input id="profile type" type="text" name="add" class="form-control" placeholder="Address" required="required" data-error="address is reqiured."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
							 </div>
							 <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_password">Allergic Medicine</label>
                                        <input id="profile type" type="text" name="alle" class="form-control" placeholder="Alergic Medicine" required="required" data-error="reqiured."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Submit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are mandatory.</p>
                                </div>
                            </div>
                        </div>
						</form>