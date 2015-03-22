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
			<a href="$url"><img src="/WarmMail/Public/images/view-mailbox.gif" border="0" width="149" height="43" alt="" /></a>
			<a href="$url"><img src="/WarmMail/Public/images/new-message.gif" border="0" width="149" height="43" alt="" /></a>
			<a href="/WarmMail/Home/Account/list"><img src="/WarmMail/Public/images/account-setup.gif" border="0" width="149" height="43" alt="" /></a>
			<?php if($is_login == 1): ?><img src="/WarmMail/Public/images/spacer.gif" border="0" width="549" height="43" alt="" />
			<a href="/WarmMail/Home/Login/logout"><img src="/WarmMail/Public/images/log-out.gif" border="0" width="149" height="43" alt="" /></a><?php endif; ?>
		</td>
        </tr>
    </table>

    	<!-- content -->
	<link rel="stylesheet" type="text/css" href="/WarmMail/Public/css/validform.css" />
	<script type="text/javascript">
		$(function(){
			$("#setAccount_form").Validform({
				btnSubmit:"#sub", 
				tiptype:3,
				showAllError: true
			});
		})
	</script>
<div align="center">
  <form id="setAccount_form" method="post" action="/WarmMail/index.php/Home/Account/setup">
  <table bgcolor="#cccccc" cellpadding="6" cellspacing="0" border="0">
   <tr>
     <th colspan="2" bgcolor="#ff6600"><?php echo ($title); ?></th>
     <input type="hidden" name="accountid" value="<?php echo ((isset($account_info["accountid"]) && ($account_info["accountid"] !== ""))?($account_info["accountid"]):''); ?>" />
   </tr>
   <tr>
     <td>Server Name:</td>
     <td><input type="text" name="server" maxlength="30" value="<?php echo ((isset($account_info["server"]) && ($account_info["server"] !== ""))?($account_info["server"]):''); ?>" datatype="*1-30" nullmsg="请输入服务商" errormsg="请输入正确的邮件服务提供商"></td>
   </tr>
   <tr>
     <td>Port Number:</td>
     <td><input type="text" name="port" maxlength="5" value="<?php echo ((isset($account_info["port"]) && ($account_info["port"] !== ""))?($account_info["port"]):''); ?>" datatype="n2-5" errormsg="请输入2~5位数字端口号" nullmsg="请输入端口号"></td>
   </tr>
   <tr>
     <td>Server Type:</td>
       <td><select name="type">
      <?php switch($$account_info["type"]): case "POP3": ?><option value="POP3" checked="checked">POP3</option>
			   <option value="IMAP">IMAP</option><?php break;?>
      <?php case "IMAP": ?><option value="POP3">POP3</option>
      <option value="IMAP" checked="IMAP">IMAP</option><?php break;?>
      <?php default: ?>
      <option value="POP3">POP3</option>
      <option value="IMAP">IMAP</option><?php endswitch;?>
		</select></td>
     </td>
   </tr>
   <tr>
     <td>User Name:</td>
     <td><input type="text" name="remoteuser" value="<?php echo ((isset($account_info["remoteuser"]) && ($account_info["remoteuser"] !== ""))?($account_info["remoteuser"]):''); ?>" datatype="*1-30" nullmsg="请输入登录邮箱的账号名"></td>
   </tr>
   <tr>
     <td>Password:</td>
     <td><input type="password" name="remotepassword" value="<?php echo ((isset($account_info["remotepassword"]) && ($account_info["remotepassword"] !== ""))?($account_info["remotepassword"]):''); ?>" datatype="*1-25" nullmsg="请输入密码"></td>
   </tr>
   <input type="hidden" name="accountid" value="">
    <?php if($init != 1): ?><tr>
    	<td align="center">
			<input type="image" src="/WarmMail/Public/images/save-changes.gif" border="0" width="149" height="43"alt="<?php echo ucwords('save changes');?>"></a>
    	</td>
    </form>
    <form action="/WarmMail/index.php/Home/Account/delete" method="post">
		<input type="hidden" name="accountid" value="<?php echo ((isset($account_info["accountid"]) && ($account_info["accountid"] !== ""))?($account_info["accountid"]):''); ?>">
        <td align="center">
			<input type="image" src="/WarmMail/Public/images/delete-account.gif" border="0" width="149" height="43" alt="<?php echo ucwords('delete account');?>"></a>
    	</td>
    </form>
    </tr>
	<?php else: ?>
	<tr>
    	<td colspan="2" align="center">
				<input type="image" src="/WarmMail/Public/images/save-changes.gif" border="0" width="149" height="43" alt="<?php echo ucwords('save changes');?>"></a>
    	</td>
	</form>
    </tr><?php endif; ?>
</table>
</div>
<br />



	<!-- footer -->
	<table width="100%" cellpadding="6" cellspacing="0" border="0">
		<tr>
		<td bgcolor="#ff6600" align="right"><img src="/WarmMail/Public/images/warm-mail.gif" width="103" height="45" alt="" valign="middle" /></td>
    	</tr>
	</table>
</body>
</html>