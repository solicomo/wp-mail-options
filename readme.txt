=== WP Mail Options ===
Contributors: Soli
Tags: wp mail options, phpmailer, mail from, from email, email from, from address, mail, email, smtp, from address, email address, from header
Requires at least: 2.2
Tested up to: 3.0.2
Stable tag: 0.1.1

This plugin allows you to set almost all options of emails sent by WordPress. 

== Description ==

This plugin allows you to set almost all options of emails sent by WordPress. 
In fact, it just simply modified the value of the PHPMailer's member variables. 
Warning: This plugin is only for advanced users. 
You should know exactly what effect each option will have on the behavior of PHPMailer when you use this plugin.

== Installation ==

1. Upload the full directory into your wp-content/plugins directory
2. Activate the plugin at the plugin administration page
3. Open the plugin configuration page, which is located under "Settings -> WP Mail Options" and customize settings. 

== Frequently Asked Questions ==

= Why does the From address still show as the default or show up as 'sent on behalf of' the default address =

Possibly your mail server has added a *Sender:* header or is configured to always set the *envelope sender* to the user calling it.

== Screenshots ==

1. The settings menu

== Changelog ==

= 0.1.1 =
* Fixed that the options were saved to a wrong path (wp-admin/options.txt) instead of (wp-content/plugins/wp-mail-options/options.txt), when this plugin was deactivated.
* Updated options page UI.

= 0.1.0 =
* first version.
