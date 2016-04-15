<?php include 'includes/header.php';?>
<?php include 'includes/nav.php';?>
<div id="content">
        <h1>Bookings</h1>
		<form id="form_1114794" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h3>Please fill out the form as best you can</h3>
            <p>Required elements are marked with:  <span style="color:red">*</span></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Name<span style="color:red">*</span> </label>
		<span>
			<input id="element_1_1" required name= "element_1_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Request a Day<span style="color:red">*</span></label>
		<span>
			<input id="element_2_1" required name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_1">MM</label>
		</span>
		<span>
			<input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_2">DD</label>
		</span>
		<span>
	 		<input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_2_3">YYYY</label>
		</span>
	
		<span id="calendar_2">
			<img id="cal_img_2" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_2_3",
			baseField    : "element_2",
			displayArea  : "calendar_2",
			button		 : "cal_img_2",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>
                <li id="li_3" >
		<label class="description" for="element_3">Number of days <span>&nbsp;&nbsp;</span></label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/>
		</div> 
		</li>
                <li id="li_4" >
		<label class="description" for="element_4">Email<span style="color:red">*</span> </label>
		<div>
			<input id="element_4" required name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Number <span>&nbsp;&nbsp;</span></label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Information about you dog(s) or any extra needs<span style="color:red">*</span> </label>
		<div>
			<textarea style="margin-left:10px" id="element_5" required name="element_5" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1114794" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
        <blockquote>
            <p><strong>"</strong>The daily photos were great and we felt good about our lab's stay with Kandice. Our dog came home well-rested after the multiple walks per day. Would book again!<strong>"</strong></p>
            <h4>Matt D.</h4>
        </blockquote>
<?php include 'includes/cta.php';?>
<?php include 'includes/footer.php';?>