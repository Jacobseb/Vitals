<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"></h3>
          <p class="section-description"> </p>
        </div>
      </div>
  <!--<body>-->
  <!-- 

'Golazo' App Login Page Concept utilizing Velocity.js & SVG animation techniques.

Inspirations:
+Anton Aheichanka - https://dribbble.com/shots/1945593-Login-Home-Screen?list=users&offset=4
+Nicolay Talanov - https://codepen.io/suez/pen/dPqxoM

-->



                        <div class="messages" ></div>
						<div class="row" align="center">
                           <div class="col-sm-6">
                                <div class="member">
								 <div class="pic"><img src="img/team-1.jpg" alt="" width="100" height="100"></div>
								</div>
								</div>
								</div>
								<br>
								<br>
								<br>
								
                        <div class="controls" align="left" style="margin-left: 30%; margin-right: 1%" >
						<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_name">Firstname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $_SESSION['fname']; ?>
                                       <!-- <input id="form_name" type="text" name="name" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
								</div>
								<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $_SESSION['sname']; ?>
                                        <!--<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_email">Email  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $_SESSION['mail']; ?>
                                      <!--  <input id="form_email" type="email" name="email" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
								</div>
								
								<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_phone">Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $_SESSION['add']; ?>
                                      <!--  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_phone">Phone  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $_SESSION['mob']; ?>
                                      <!--  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_phone">Profile type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $_SESSION['ptype']; ?>
                                      <!--  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_phone">ID no&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $_SESSION['idno']; ?>
                                      <!--  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="form_phone">Alergic medicine :&nbsp;&nbsp;</label><?php echo $_SESSION['amed']; ?>
                                      <!--  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="">
                                        <div class="help-block with-errors"></div>-->
                                    </div>
                                </div>
                            </div>
							                                <div class="col-md-12">
															<a href="index.php?value=4">
                                    <input type="submit" class="btn btn-success btn-send" value="Edit"> </a>
                                </div>
                            </div>
                            
                        </div>

                