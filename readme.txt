=== Admin renamer extended ===
Contributors: Ramon Fincken
Donate link: http://donate.ramonfincken.com
Tags: admin,admins,rename,founder,change,user,users,renamer,extended
Requires at least: 2.0.2
Tested up to: 2.8.4
Stable tag: 1.3

Plugin to change your default admin username ( with GUI to change all other admin names too ).

== Description ==

Plugin to change your default admin username ( with GUI to change all other admin names too ).

== Installation ==

1. Upload directory `admin_renamer_extended` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Visit Plugins menu to change your admin name(s)

== Frequently Asked Questions ==

None available


== Changelog ==

= 1.1 =
First release

= 1.2 =
Tidying of html code, added screenshots

= 1.3 =
Applied WP way of handling usernames:

if (empty ($newName)) {
      $message = stripslashes($oldName) . ' NOT changed-> New name was empty!';
      $showMsg = 'block';
   } else {
      if (!validate_username($newName)) {
         $message = stripslashes($oldName) . ' NOT changed -> This username is invalid. Please enter a valid username.';
         $showMsg = 'block';
      }
      [rest of code]

== Screenshots ==

1. Before rename
2. After rename
