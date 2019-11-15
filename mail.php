<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	if(isset($_POST["btn"])){
		if($_POST["email"]=="" ||$_POST["title"]=="" || $_POST["text"]==""){
			echo("<font color=red>کادری خالی می باشد</font>");
		}else{
			mail($_POST["email"],$_POST["title"],$_POST["text"]);
			echo("<font color=green><b>با موفقیت ارسال شد</b></font>");
		}
	}
	
	
	?>
<form id="form1" name="form1" method="post">
  <table width="250" border="1">
    <tbody>
      <tr>
        <td width="68" bgcolor="#F18002" style="color: #02B5F5"><strong> مخاطب ایمیل</strong></td>
        <td width="166"><input type="email" name="email" id="email"></td>
      </tr>
      <tr>
        <td bgcolor="#F18002" style="color: #02B5F5"><strong>عنوان</strong></td>
        <td><input type="text" name="title" id="title"></td>
      </tr>
      <tr>
        <td bgcolor="#F18002" style="color: #02B5F5"><strong>متن</strong></td>
        <td><input type="text" name="text" id="text"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="btn" id="btn" value="ارسال"></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>