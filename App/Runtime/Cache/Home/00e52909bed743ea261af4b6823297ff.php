<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
  <title><?php echo ($title); ?></title>
    <style>
      h1 { font-family: 'Comic Sans MS',  sans-serif; font-size: 32;
           font-weight: bold; color:  black; margin-bottom: 0}
      b { font-family: 'Arial', sans-serif; font-size: 13;
          font-weight: bold; color: black }
      th { font-family: 'Comic Sans MS',  sans-serif; font-size: 18
           font-weight: bold; color:  black; }
      body, li, td { font-family: Arial, Helvetica, sans-serif;
                     font-size: 12; margin = 5px }
      a { color: #000000 }
    </style>
	<script type="text/javascript" src="/WarmMail/Public/Js/jquery_11.js"></script>
	<script type="text/javascript" src="/WarmMail/Public/Js/Validform_v5.js"></script>
  </head>
  <body>
	<!-- title -->
	<table width="100%" cellspacing="0" cellpadding="3" bgcolor="#ff6600" border="0">
		<tr bgcolor="#ff6600">
		<td bgcolor="#ff6600" width="103"><img src="/WarmMail/Public/images/warm-mail.gif" width="103" height="45" alt="" valign="middle" /></td>
		<td bgcolor="#ff6600" width="90%"><h1><?php echo ($title); ?></h1></td>
		</tr>
	</table>
	<!-- toolbar -->
	<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
        <td bgcolor="#ccccc" align="">
			<a href="/WarmMail/Home/Index/index"><img src="/WarmMail/Public/images/view-mailbox.gif" border="0" width="149" height="43" alt="" /></a>
			<a href="$url"><img src="/WarmMail/Public/images/new-message.gif" border="0" width="149" height="43" alt="" /></a>
			<a href="/WarmMail/Home/Account/list"><img src="/WarmMail/Public/images/account-setup.gif" border="0" width="149" height="43" alt="" /></a>
			<?php if($is_login == 1): ?><img src="/WarmMail/Public/images/spacer.gif" border="0" width="549" height="43" alt="" />
			<a href="/WarmMail/Home/Login/logout"><img src="/WarmMail/Public/images/log-out.gif" border="0" width="149" height="43" alt="" /></a><?php endif; ?>
		</td>
        </tr>
    </table>

    
	<!-- content -->




	<!-- footer -->
	<table width="100%" cellpadding="6" cellspacing="0" border="0">
		<tr>
		<td bgcolor="#ff6600" align="right"><img src="/WarmMail/Public/images/warm-mail.gif" width="103" height="45" alt="" valign="middle" /></td>
    	</tr>
	</table>
</body>
</html>