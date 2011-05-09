<?php
/*
WP Mail Options Page
*/

$wpmo_status = "normal";

if($_POST['wpmo_update_options'] == 'Y') {
	update_option("wp_mail_options", maybe_serialize($_POST));
	$wpmo_status = 'update_success';
}

if(!class_exists('WPMailOptionsPage')) {
class WPMailOptionsPage {
function WPMailOptions_Options_Page() {
	?>

	<div class="wrap">
	<div id="wpmo-options">
	<div id="wpmo-title"><h2>WP Mail Options</h2></div>
	<?php
	global $wpmo_status;
	if($wpmo_status == 'update_success')
		$message =__('Configuration updated', 'wp-mail-options') . "<br />";
	else if($wpmo_status == 'update_failed')
		$message =__('Error while saving options', 'wp-mail-options') . "<br />";
	else
		$message = '';

	if($message != "") {
	?>
		<div class="updated"><strong><p><?php
		echo $message;
		?></p></strong></div><?php
	} ?>
	<div id="wpmo-desc">
	<?php _e("<p>This plugin allows you to set almost all options of emails sent by WordPress. In fact, it just simply modified the value of the PHPMailer's member variables, which is offered on the right, including their description, type, name and default vlaue following the equal sign.</p>
<p>In most cases, this plugin replace the old value of each variable with the new value you give below; for the rest, it apends new value after the old value, for instance, To, Cc, Bcc and so on.</p>
<p>Some options will affect others to be effective, like if \"Mailer\" be set as \"mail\" or \"sentmail\", all options about SMTP in the following will be valid.</p>
<p>If you don't want (or know how to) set one option, you should leave it blank.</p>
<p><b>Warning:</b> This plugin is only for advanced users. You should know exactly what effect each option will have on the behavior of PHPMailer when you use this plugin. </p>", 'wp-mail-options'); ?>
	</div>

	<!--left-->
	<div class="postbox-container" style="width:75%;">
	<div class="metabox-holder">
	<div class="meta-box-sortabless">

	<!--setting-->
	<div id="wpmo-setting" class="tool-box">
	<?php $wp_mail_options = maybe_unserialize(get_option('wp_mail_options')); ?>
	<form method="post" action="<?php echo get_bloginfo("wpurl"); ?>/wp-admin/options-general.php?page=<?php echo plugin_basename(__FILE__); ?>">
	<input type="hidden" name="wpmo_update_options" value="Y">
	<table class="form-table">

	<tr><th><?php _e('PROPERTIES, PUBLIC', 'wp-mail-options'); ?></th></tr>

	<tr><th scope="row"><?php _e('Email Priority', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_prior" value="<?php echo $wp_mail_options['wpmo_mail_prior']; ?>" /></td>
	<td><?php _e('Email priority (1 = High, 3 = Normal, 5 = low).', 'wp-mail-options'); ?>
	<br />@var int
	<br />$Priority          = 3;</td></tr>

	<tr><th scope="row"><?php _e('CharSet', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_charset" value="<?php echo $wp_mail_options['wpmo_mail_charset']; ?>" /></td>
	<td><?php _e('Sets the CharSet of the message.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$CharSet           = 'iso-8859-1';</td></tr>

	<tr><th scope="row"><?php _e('Content-type', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_content_type" value="<?php echo $wp_mail_options['wpmo_mail_content_type']; ?>" /></td>
	<td><?php _e('Sets the Content-type of the message.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$ContentType        = 'text/plain';</td></tr>

	<tr><th scope="row"><?php _e('Encoding', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_encoding" value="<?php echo $wp_mail_options['wpmo_mail_encoding']; ?>" /></td>
	<td><?php _e('Sets the Encoding of the message. Options for this are "8bit", "7bit", "binary", "base64", and "quoted-printable".', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Encoding          = '8bit';</td></tr>
<?php/*
	<tr><th scope="row"><?php _e('Error Info', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_error_info" value="<?php echo $wp_mail_options['wpmo_mail_error_info']; ?>" /></td>
	<td><?php _e('Holds the most recent mailer error message.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$ErrorInfo         = '';</td></tr>
 */?>
	<tr><th scope="row"><?php _e('From', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_from" value="<?php echo $wp_mail_options['wpmo_mail_from']; ?>" /></td>
	<td><?php _e('Sets the From email address for the message.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$From              = 'root@localhost';</td></tr>

	<tr><th scope="row"><?php _e('From Name', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_from_name" value="<?php echo $wp_mail_options['wpmo_mail_from_name']; ?>" /></td>
	<td><?php _e('Sets the From name of the message.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$FromName          = 'Root User';</td></tr>

	<tr><th scope="row"><?php _e('Sender (Return-Path)', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_sender" value="<?php echo $wp_mail_options['wpmo_mail_sender']; ?>" /></td>
	<td><?php _e("Sets the Sender email (Return-Path) of the message.  If not empty, will be sent via -f to sendmail or as 'MAIL FROM' in smtp mode."); ?>
	<br />@var string
	<br />$Sender            = '';</td></tr>

	<tr><th scope="row"><?php _e('Subject', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_subject" value="<?php echo $wp_mail_options['wpmo_mail_subject']; ?>" /></td>
	<td><?php _e('Sets the Subject of the message.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Subject           = '';</td></tr>

	<tr><th scope="row"><?php _e('Body', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_body" value="<?php echo $wp_mail_options['wpmo_mail_body']; ?>" /></td>
	<td><?php _e('Sets the Body of the message.  This can be either an HTML or text body. If HTML then run IsHTML(true).', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Body              = '';</td></tr>

	<tr><th scope="row"><?php _e('Alternative Body', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_altbody" value="<?php echo $wp_mail_options['wpmo_mail_altbody']; ?>" /></td>
	<td><?php _e('Sets the text-only body of the message.  This automatically sets the email to multipart/alternative.  This body can be read by mail clients that do not have HTML email capability such as mutt. Clients that can read HTML will view the normal Body.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$AltBody           = '';</td></tr>

	<tr><th scope="row"><?php _e('WordWrap', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_word_wrap" value="<?php echo $wp_mail_options['wpmo_mail_word_wrap']; ?>" /></td>
	<td><?php _e('Sets word wrapping on the body of the message to a given number of characters.', 'wp-mail-options'); ?>
	<br />@var int
	<br />$WordWrap          = 0;</td></tr>

	<tr><th scope="row"><?php _e('Mailer', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_mailer" value="<?php echo $wp_mail_options['wpmo_mail_mailer']; ?>" /></td>
	<td><?php _e('Method to send mail: ("mail", "sendmail", or "smtp").', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Mailer            = 'mail';</td></tr>

	<tr><th scope="row"><?php _e('Sendmail Program', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_sendmail" value="<?php echo $wp_mail_options['wpmo_mail_sendmail']; ?>" /></td>
	<td><?php _e('Sets the path of the sendmail program.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Sendmail          = '/usr/sbin/sendmail';</td></tr>

	<tr><th scope="row"><?php _e('PHPMailer Plugins Path', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_plugin_dir" value="<?php echo $wp_mail_options['wpmo_mail_plugin_dir']; ?>" /></td>
	<td><?php _e('Path to PHPMailer plugins.  This is now only useful if the SMTP class is in a different directory than the PHP include path.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$PluginDir         = '';</td></tr>

	<tr><th scope="row"><?php _e('PHPMailer Version', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_phpmailer_ver" value="<?php echo $wp_mail_options['wpmo_mail_phpmailer_ver']; ?>" /></td>
	<td><?php _e('Holds PHPMailer version.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Version           = "2.0.4";</td></tr>

	<tr><th scope="row"><?php _e('Confirm Reading To', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_confirm_reading_to" value="<?php echo $wp_mail_options['wpmo_mail_confirm_reading_to']; ?>" /></td>
	<td><?php _e('Sets the email address that a reading confirmation will be sent.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$ConfirmReadingTo  = '';</td></tr>

	<tr><th scope="row"><?php _e('Hostname', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_host_name" value="<?php echo $wp_mail_options['wpmo_mail_host_name']; ?>" /></td>
	<td><?php _e("Sets the hostname to use in Message-Id and Received headers and as default HELO string. If empty, the value returned by SERVER_NAME is used or 'localhost.localdomain'."); ?>
	<br />@var string
	<br />$Hostname          = '';</td></tr>

	<tr><th scope="row"><?php _e('MessageID', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_message_id" value="<?php echo $wp_mail_options['wpmo_mail_message_id']; ?>" /></td>
	<td><?php _e('Sets the message ID to be used in the Message-Id header. If empty, a unique id will be generated.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$MessageID         = '';</td></tr>


	<tr><th><?php _e('PROPERTIES FOR SMTP', 'wp-mail-options'); ?></th></tr>

	<tr><th scope="row"><?php _e('SMTP Host', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_host" value="<?php echo $wp_mail_options['wpmo_mail_smtp_host']; ?>" /></td>
	<td><?php _e('Sets the SMTP hosts.  All hosts must be separated by a semicolon.  You can also specify a different port for each host by using this format: [hostname:port] (e.g. "smtp1.example.com:25;smtp2.example.com"). Hosts will be tried in order.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Host        = 'localhost';</td></tr>

	<tr><th scope="row"><?php _e('SMTP Port', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_port" value="<?php echo $wp_mail_options['wpmo_mail_smtp_port']; ?>" /></td>
	<td><?php _e('Sets the default SMTP server port.', 'wp-mail-options'); ?>
	<br />@var int
	<br />$Port        = 25;</td></tr>

	<tr><th scope="row"><?php _e('SMTP Helo', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_helo" value="<?php echo $wp_mail_options['wpmo_mail_smtp_helo']; ?>" /></td>
	<td><?php _e('Sets the SMTP HELO of the message (Default is $Hostname).', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Helo        = '';</td></tr>

	<tr><th scope="row"><?php _e('SMTP Secure', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_secure" value="<?php echo $wp_mail_options['wpmo_mail_smtp_secure']; ?>" /></td>
	<td><?php _e('Sets connection prefix. Options are "", "ssl" or "tls"', 'wp-mail-options'); ?>
	<br />@var string
	<br />$SMTPSecure = "";</td></tr>

	<tr><th scope="row"><?php _e('SMTP Authentication', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_auth" value="<?php echo $wp_mail_options['wpmo_mail_smtp_auth']; ?>" /></td>
	<td><?php _e('Sets SMTP authentication. Utilizes the Username and Password variables.', 'wp-mail-options'); ?>
	<br />@var bool
	<br />$SMTPAuth     = false;</td></tr>

	<tr><th scope="row"><?php _e('SMTP Username', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_username" value="<?php echo $wp_mail_options['wpmo_mail_smtp_username']; ?>" /></td>
	<td><?php _e('Sets SMTP username.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Username     = '';</td></tr>

	<tr><th scope="row"><?php _e('SMTP Password', 'wp-mail-options'); ?></th>
	<td><input type="password" name="wpmo_mail_smtp_password" value="<?php echo $wp_mail_options['wpmo_mail_smtp_password']; ?>" /></td>
	<td><?php _e('Sets SMTP password.', 'wp-mail-options'); ?>
	<br />@var string
	<br />$Password     = '';</td></tr>

	<tr><th scope="row"><?php _e('SMTP Timeout', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_timeout" value="<?php echo $wp_mail_options['wpmo_mail_smtp_timeout']; ?>" /></td>
	<td><?php _e('Sets the SMTP server timeout in seconds. This function will not work with the win32 version.', 'wp-mail-options'); ?>
	<br />@var int
	<br />$Timeout      = 10;</td></tr>

	<tr><th scope="row"><?php _e('SMTP Debug', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_debug" value="<?php echo $wp_mail_options['wpmo_mail_smtp_debug']; ?>" /></td>
	<td><?php _e('Sets SMTP class debugging on or off.', 'wp-mail-options'); ?>
	<br />@var bool
	<br />$SMTPDebug    = false;</td></tr>

	<tr><th scope="row"><?php _e('SMTP Keep Alive', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_keep_alive" value="<?php echo $wp_mail_options['wpmo_mail_smtp_keep_alive']; ?>" /></td>
	<td><?php _e('Prevents the SMTP connection from being closed after each mail sending.  If this is set to true then to close the connection requires an explicit call to SmtpClose().', 'wp-mail-options'); ?>
	<br />@var bool
	<br />$SMTPKeepAlive = false;</td></tr>

	<tr><th scope="row"><?php _e('SMTP SingleTo', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_smtp_single_to" value="<?php echo $wp_mail_options['wpmo_mail_smtp_single_to']; ?>" /></td>
	<td><?php _e('Provides the ability to have the TO field process individual emails, instead of sending to entire TO addresses', 'wp-mail-options'); ?>
	<br />@var bool
	<br />$SingleTo = false;</td></tr>

	<tr><th><?php _e('PROPERTIES, PRIVATE', 'wp-mail-options'); ?></th></tr>

	<tr><th scope="row"><?php _e('To', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_to" value="<?php echo $wp_mail_options['wpmo_mail_to']; ?>" /></td>
	<td>var $to              = array();</td></tr>

	<tr><th scope="row"><?php _e('Cc', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_cc" value="<?php echo $wp_mail_options['wpmo_mail_cc']; ?>" /></td>
	<td>var $cc              = array();</td></tr>

	<tr><th scope="row"><?php _e('Bcc', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_bcc" value="<?php echo $wp_mail_options['wpmo_mail_bcc']; ?>" /></td>
	<td>var $bcc             = array();</td></tr>

	<tr><th scope="row"><?php _e('ReplyTo', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_replyto" value="<?php echo $wp_mail_options['wpmo_mail_replyto']; ?>" /></td>
	<td>var $ReplyTo         = array();</td></tr>

	<tr><th scope="row"><?php _e('Attachment', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_attachment" value="<?php echo $wp_mail_options['wpmo_mail_attachment']; ?>" /></td>
	<td>var $attachment      = array();</td></tr>

	<tr><th scope="row"><?php _e('Custom Header', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_custom_header" value="<?php echo $wp_mail_options['wpmo_mail_custom_header']; ?>" /></td>
	<td>var $CustomHeader    = array();</td></tr>

	<tr><th scope="row"><?php _e('Boundary', 'wp-mail-options'); ?></th>
	<td><input type="text" name="wpmo_mail_boundary" value="<?php echo $wp_mail_options['wpmo_mail_boundary']; ?>" /></td>
	<td>var $boundary        = array();</td></tr>
<?php
/*
  var $message_type    = '';  
  var $language        = array();
  var $error_count     = 0;
  var $LE              = "\n";
  var $smtp            = NULL;
  var $sign_cert_file  = "";
  var $sign_key_file   = "";
  var $sign_key_pass   = "";
*/
?>
	</table>
	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Save Changes', 'wp-mail-options'); ?>" />
	</p>
	</form>
	</div>
	<!--settin end-->

	<!--others-->
	<!--others end-->

	</div></div></div>
	<!--left end-->

	<!--right-->
	<div class="postbox-container" style="width:21%;">
	<div class="metabox-holder">
	<div class="meta-box-sortables">

	<!--about-->
	<div id="wpmo-about" class="postbox">
	<h3 class="hndle"><?php _e('About this plugin', 'wp-mail-options'); ?></h3>
	<div class="inside"><ul>
	<li><a href="http://www.cbug.org"><?php _e('Plugin URI', 'wp-mail-options'); ?></a></li>
	<li><a href="http://www.cbug.org" target="_blank"><?php _e('Author URI', 'wp-mail-options'); ?></a></li>
	</ul></div>
	</div>
	<!--about end-->

	<!--others-->
	<!--others end-->

	</div></div></div>
	<!--right end-->

	</div>
	</div>
	<?php
}

function WPMailOptions_Menu() {
	add_options_page(__('WP Mail Options'), __('WP Mail Options'), 10, __FILE__, array(__CLASS__,'WPMailOptions_Options_Page'));
}

} // end of class WPMailOptions
} // end of if(!class_exists('WPMailOptions'))
?>
