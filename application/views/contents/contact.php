



















	<div class="container">
		<h3 class="headline centered margin-bottom-45 padding-top-35">Contact<span>Send an Email. All fields with an asterisk (*) are required.</span></h3>

		<form id="contact-form" action="<?php echo site_url("transpoter_controller/contact")?>" method="post" class="form-validate form-horizontal">
			<fieldset>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">

							<div class="col-sm-12">
								<label >Name </label>
								<input type="text" name="name"  size="30"       required aria-required="true"      />
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">

							<div class="col-sm-12">
								<label >Email</label>
								<input type="email" name="email" size="30"    autocomplete="email"    required aria-required="true"  />           
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">

						<label >Subject</label>
						<input type="text" name="subject"  size="60"       required aria-required="true"      />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">

						<label >Message</label>
						<textarea name="msg"   cols="50"  rows="5" required aria-required="true"     ></textarea>          
					</div>
				</div>
				<div class="form-group">
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-sm-7 control-checkbox">
						<div class="checkbox">
							<input type="submit" id="submit-action" class="button border fw margin-top-30 margin-bottom-20" name="register" value="Submit"  />
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 control-btn">

					</div>
					<input type="hidden" name="option" value="com_contact" />
					<input type="hidden" name="task" value="contact.submit" />
					<input type="hidden" name="return" value="" />
					<input type="hidden" name="id" value="1:transporter-contact" />
					<input type="hidden" name="6b919dadc0531a99187692d43e4ab9f5" value="1" />        
				</div>
			</fieldset>
		</form>

	</div>

