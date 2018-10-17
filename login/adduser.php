<!--========================
  new patient profile
   =================-->
    <section id="profile">
  <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">ADD PROFILE</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Manage this basic information — your name, email, and phone number </p>
        </div>
      </div>
<form id="contact-form" method="post" action="adduser/adduser1.php" role="form" >


                        <div class="messages" ></div>
						
						<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_name">Firstname:</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Firstname">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								</div>
								<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname:</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Lastname">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_email">Email Id:</label>
                                       <input id="form_email" type="email" name="email" class="form-control" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								</div>
								
								
							
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_phone">ID NO:</label>
                                       <input id="form_phone" type="tel" name="idno" class="form-control" placeholder="ID NO">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_phone">Alergic Medicine:</label>
                                       <input id="form_phone" type="tel" name="alergic" class="form-control" placeholder="Alergic Medicine">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
							                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Submit">
                                </div>
                            </div>
                            
                        </div>

                    </form>

<br><br><br><br><br><br>
</section>
