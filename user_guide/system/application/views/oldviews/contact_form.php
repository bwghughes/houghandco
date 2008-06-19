<div id="content">
	<div class="column">
		<div class="column-decor">
			<?=$this->validation->error_string; ?>
			<?=form_open('contactus'); ?>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name" value="" size="50" /></td>
					</tr>
					<tr>
						<td>Subject:</td>
						<td><input type="subject" name="subject" value="" size="50" /></td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" value="" size="50" /></td>
					</tr>
					<tr>
						<td>Message:</td>
						<td><textarea name="body" value="" cols="50"></textarea></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Contact Hough &amp; Co" /></td>
					</tr>
				<table>
			</form>
			<hr/>
			Alternatively contact us on:
			<p>
				Hough &amp; Co.<br/>
				22 Market Stret, Lichfield, Staffordshire WS13 6LH
			</p>
			<p>
				<img src="images/t.gif"alt="Telephone" />&nbsp;01543 414126
				<img src="images/f.gif"alt="Fax" />&nbsp;01543 414761
				<img src="images/m.gif"alt="Mobile" />&nbsp;07968 584887
			</p>
		</div>

