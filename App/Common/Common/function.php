<?php
/*
 * add_wangxb_20150315
 * common function
 */
function verify_remote_info($server,$port,$remote_user,$remote_pwd,$type='imap') {
	$mailbox = '{'.$server.':'.$port.'/'.$type.'/ssl}INBOX';
	$imap = imap_open($mailbox,$remote_user,$remote_pwd);
	if(!$imap) {
		imap_close($imap);
		return false;
	}
	imap_close($imap);
	return true;
}