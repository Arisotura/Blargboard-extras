<?php
$title = __("IRC Page");
if(!$loguserid)
{
  Kill("You should be log in for use the IRC.");
}
else
{
$nick = "insert default guest nick here";
$chan = "#yourchannel";
$serv = "irc.yourserver.com";
?>
<div align="center">
<center>
<!--There's an online IRC client working with KiwiIRC. Edit the stuff for the server and channel, and, if you want, change IRCGuest to something more cool.-->
<iframe src="https://kiwiirc.com/client/<?php print $serv;?>/?nick=<?php print $nick;?>?<?php print $chan;?>" style="border:0; width:125%; height:525px;"></iframe>
<br>
If you have an IRC Client..:<br>
If your IRC client allows irc:// links, click <a href="irc://<?php print $serv;?>/<?php print $chan;?>">here</a><br>
You can join the channel with your IRC Client with this data:<br>
<table class="outline margin anncbar">
<tbody>
<tr class="header1">
<th>Channel:</th>
<th style="width: 20%">Server:</th>
</tr>
<tr class="cell1">
<td>
<center><?php print $chan;?></center>
</td>
<td>
<table>
<tbody>
<tr>
<center><?php print $serv;?></center></td></tr></tbody></table></td></tr></tbody></table>
</div>
<?php
}
?>
