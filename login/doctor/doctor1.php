<?php
?>
<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Doctor</h3>
          <div class="section-title-divider"></div>
          <!--<p class="section-description">The services we provide are </p>-->
        </div>
      </div>

     <form id="contact-form" method="post" action="doctor/doctor3.php" role="form" style="padding-left: 100px;">


                        <div class="messages"></div>

                        <div class="controls">
						<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
									<label for="form_lastname">IDcard type *</label>
									<br>
                                        <input id="form_lastname" name="idtype" style="height:34px; width:410.5px" class="form-control"  list="Idcard type" placeholder="IDcard Type" type="text">
 
                                         <datalist id="Idcard type">
                                          <option value="voters id"/>
                                          <option value="Pan card"/>
                                           <option value="Aadhar no"/>
                                             </datalist>	
										<!--<select name="Idcard type">
                                          <option value="idcard type">idcard types</option>
                                          <option value="pan card">pan card</option>
                                          <option value="adhar no">adhar no</option>
                                          <option value="election id">election id</option>
                                           </select>-->
                
                                    </div>
                                </div>
								 
                                                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_email">IDcard no *</label>
                                        <input id="form_lastname" type="text" name="idno" class="form-control" placeholder="Please enter your idcardno *" required="required" data-error="Valid no is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
						
								<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_email">Registration no:</label>
                                        <input id="form_lastname" type="text" name="reg" class="form-control" placeholder="Please enter your registration no *" required="required" data-error="Valid no is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
							    <div class="col-md-5">
                                    <div class="form-group">
									<label for="form_lastname">Specialist *</label>
									<br>
                                          <input id="form_lastname" name="spec" style="height:34px; width:410.5px" class="form-control"   list="specialist"  placeholder="specialist" type="text">
 
                                            <datalist id="specialist">
                                            <option value="ent"/>
                                            <option value="cardiology"/>
                                             <option value="nephrology"/>
										     <option value="psychatric"/>
                                              </datalist>	
										                
                                    </div>
                                </div>				
							
							 </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Register">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are mandatory.</p>
                                </div>
                            </div>
                        </div>

                    </form>
<!--</body>-->
        
      </div>
    </div>
