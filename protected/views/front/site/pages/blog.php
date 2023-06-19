<div class="container">
	
	<div class="row">
		<table width="1031" border="0">
          <tr>
            <th width="293" background="<?php echo Yii::app()->baseUrl; ?>/images/sprite_07.jpg" scope="col"><div align="left">DASHBOARD</div></th>
            <th width="306" background="<?php echo Yii::app()->baseUrl; ?>/images/sprite_07.jpg" scope="col">&nbsp;</th>
            <th width="418" background="<?php echo Yii::app()->baseUrl; ?>/images/sprite_07.jpg" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th height="21" background="<?php echo Yii::app()->baseUrl; ?>/images/sprite_07.jpg" scope="row"><div align="left">Overview</div></th>
            <td background="<?php echo Yii::app()->baseUrl; ?>/images/sprite_07.jpg">Activit</td>
            <td background="<?php echo Yii::app()->baseUrl; ?>/images/sprite_07.jpg">Leaderboard</td>
          </tr>
        </table>
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="index.html">Home</a><span class="divider">/</span></li>
				<li class="active">Contact</li>
			</ul>
	  </div>
    <!-- =========================Start Col left section ============================= -->
		<aside class="span4">
		<div class="col-left">
			<h3>Address</h3>
			<ul>
				<li><i class="icon-home"></i> 11 Fifth Ave, Loftus - NEW JERSEY, US</li>
				<li><i class="icon-phone"></i> Telephone: + 61 (2) 8093 3400</li>
				<li><i class="icon-phone-sign"></i> Fax: +61 (2) 9542 3599</li>
				<li><i class="icon-envelope"></i> Email: <a href="#">submissions@domain.com</a></li>
			</ul>
			<hr>
			<iframe height="250" src="https://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=India,+UttarPradesh+Lucknow&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973&amp;output=embed" style="border:0;">
			</iframe>
			<br/>
			<small><a href="https://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=new+york&amp;sll=40.714353,-74.005973&amp;sspn=0.868126,2.422485&amp;ie=UTF8&amp;hq=&amp;hnear=India,+UttarPradesh+Lucknow&amp;t=m&amp;z=10&amp;iwloc=A&amp;ll=40.714353,-74.005973" style="text-align:left">View bigger</a></small>
            <hr>
             <p>Get directions writing your start point.</p>
            <form action="http://maps.google.com/maps" method="get" target="_blank">
                <input type="text" name="saddr"  placeholder="Enter your location" class="span3" />
                <input type="hidden" name="daddr" value="New York, NY 11430" /> <!-- Write here your end point -->
                <input type="submit" value="Get directions" class=" button_medium" />
            </form>    
		</div>
		<p>
			<a href="all-courses.html" title="All courses"><img src="<?php echo Yii::app()->baseUrl; ?>/img/banner.jpg" alt="Banner" class="img-rounded"></a>
		</p>
		</aside>
        
        <!-- =========================Start Col right section ============================= -->
		<section class="span8 ">
		<div class="col-right">
			<p class="lead">
				An utinam reprimique duo, <strong>putant mandamus cu qui</strong>. Priaeque iuvaret nominati et, ad mea clita numquam. Maluisset dissentiunt et per, dico liber erroribus vis te. Dolor consul graecis nec ut, scripta eruditi scriptorem et nam.
			</p>
			<hr>
			<h4>General Enquire or Apply</h4>
            
			<div id="message-contact"></div>
			<form method="post" action="assets/contact.php" id="contactform">
				<div class="row">
					<div class="span3">
						<label>Name <span class="required">* </span></label>
						<input type="text" class="span3 ie7-margin" id="name_contact">
					</div>
					<div class="span3">
						<label>Last name <span class="required">* </span></label>
						<input type="text" class="span3 ie7-margin" id="lastname_contact">
					</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Email <span class="required">* </span></label>
						<input type="email" id="email_contact" class="span3 ie7-margin">
					</div>
					<div class="span3">
						<label>Phone <span class="required">* </span></label>
						<input type="text" id="phone_contact" class="span3 ie7-margin">
					</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Select a department</label>
						<select id="subject_contact" class="span3">
							<option value="Administration">Administration</option>
							<option value="Admissions">Admissions</option>
							<option value="Courses">Courses</option>
							<option value="Apply">Apply</option>
						</select>
					</div>
				</div>
                <div class="row">
					<div class="span3">
						<label>Message <span class="required">*</span></label>
						<textarea rows="5" id="message_contact" class="span6"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="span3">
						<label><span class="required">*</span> Are you human? 3 + 1 =</label>
						<input type="text" id="verify_contact" class="span2">
					</div>
					<div class="button-align span3">
						<input type="submit" id="submit-contact" value="Submit" class=" button_medium">
					</div>
				</div>
				<hr>
			</form>
            
			<h4>Plan a visit</h4>
			<div id="message-visit"></div>
			<form method="post" action="assets/visit.php" id="visit">
				<div class="row">
					<div class="span3">
						<label>Name <span class="required">* </span></label>
						<input type="text" class="span3 ie7-margin" id="name_visit">
					</div>
					<div class="span3">
						<label>Last name <span class="required">* </span></label>
						<input type="text" class="span3 ie7-margin" id="lastname_visit">
					</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Email <span class="required">* </span></label>
						<input type="email" id="email_visit" class="span3 ie7-margin">
					</div>
					<div class="span3">
						<label>Phone <span class="required">* </span></label>
						<input type="text" id="phone_visit" class="span3 ie7-margin">
					</div>
				</div>
				<div class="row">
					<div class="span3">
						<div id="datetimepicker" class="input-append">
							<label>Select a date <span class="required">* </span></label>
							<input type="text" class=" dateinput" id="date_visit" readonly>
							<span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
						</div>
					</div>
					<div class="span3">
						<label><span class="required">*</span> Are you human? 3 + 1 =</label>
						<input type="text" id="verify_visit" class="span2">
					</div>
				</div>
				<!-- end row-->
				<input type="submit" id="submit-visit" value="Submit" class=" button_medium">
			</form>
            
		</div><!-- end col right-->
		</section>
  </div><!-- end row-->
</div><!-- end container-->