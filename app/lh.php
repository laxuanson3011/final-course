

<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
<form name="contactform" method="post" action="send_form_email.php">
<div class="card-body" style="">
<div class="col-lg-9">
<div>
<table style=" border-color: rgb(0,0,0);border-style: double; border-width: 5px; background-color: #ffffff; ">
<tr>
<td valign="top">
<label for="first_name" style="width: 50px; height: 25px;">First Name :</label>
</td>
<td valign="top">
<input  type="text" name="first_name" maxlength="50" size="100">
</td>
</tr>
<tr>
<td valign="top"">
<label for="last_name">Last Name :</label>
</td>
<td valign="top">
<input  type="text" name="last_name" maxlength="50" size="100">
</td>
</tr>
<tr>
<td valign="top">
<label for="email">Email Address :</label>
</td>
<td valign="top">
<input  type="text" name="email" maxlength="80" size="100">
</td>
</tr>
<tr>
<td valign="top">
<label for="telephone">Telephone Number :</label>
</td>
<td valign="top">
<input  type="text" name="telephone" maxlength="30" size="100">
</td>
</tr>
<tr>
<td valign="top">
<label for="comments">Comments :</label>
</td>
<td valign="top">
<textarea  name="comments" maxlength="1000" cols="100" rows="10"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
<input type="submit" value="Submit"></td>
</tr>
</table>
</div>
</div>
</div>
</form>