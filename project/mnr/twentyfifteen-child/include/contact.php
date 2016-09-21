   <!-- *******************************
    			CONTACT
    *********************************** -->

    	<div class="container">
      	<div class="row" >
      		
          <div class="hidden-xs hidden-sm  col-md-6 col-lg-4 col-lg-offset-1 text-center">
          	<img alt="Contact us" src="<?php echo img_uri($contact_frm->img_src); ?>">
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-lg-offset-1">
          
          	<div style="max-width: 432px; margin: 0 auto;" >
            
            	<div style="height: 151px;">
                <h3><?php echo $contact_frm->headline; ?></h3>
                <p><?php echo $contact_frm->message; ?></p>
              </div>
              
              <form action="<?php echo site_url() . "/index.php" ?>" method="POST">
                <table style="width: 100%;">
                  <tr><td><label for="ct_name">NAME:</label></td></tr>
                  <tr><td><input type="text" name="ct_name" style="width:266px;" required></td></tr>
                  <tr><td><label for="ct_email">EMAIL:</label></td></tr>
                  <tr><td><input type="email" name="ct_email" style="width:266px;" required></td></tr>
                  <tr><td><label for="ct_message">MESSAGE:</label></td></tr>
                  <tr><td><textarea name="ct_message" required></textarea></td></tr>
                  <tr><td><input type="text" name="ct_human" id="human" placeholder="What's 2+2?" required>
                          <input type="submit" value="SEND" name="ct_submit"></td></tr>
                </table>
              </form>
						</div>
          </div>
          
          
        </div>
      </div>
