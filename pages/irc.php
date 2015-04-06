<?php
$title = __("IRC Page");
// The network hostname of your IRC channel
$net = "irc.yournetwork.net";
// The actual name of the channel without the beginning #
$chan = "YourChannel";
// The name prefix for anyone joining
$nameprefix = "IRCGuest";
?>
<html>
<div align="center">
<center>
<iframe src="https://kiwiirc.com/client/<?php echo $net; ?>/?nick=<?php echo $nameprefix; ?>/?#<?php echo $chan; ?>" style="border:0; width:125%; height:525px;"></iframe>
<br>
If you have an IRC Client..:<br>
If your IRC client allows irc:// links, click <a href="irc://<?php echo $net; ?>/<?php echo $chan; ?>">here</a><br>
You can join the channel with your IRC Client with this data:<br>
<tbody><tr class="header1"><th>Channel:</th><th style="width: 20%">Server:</th></tr><tr class="cell1"><td><center>#<?php echo $chan; ?></center></td><td><table><tbody><tr><center><?php echo $net; ?>0</center></td></tr></tbody></table></td></tr></tbody></table>
</div>
</html>
