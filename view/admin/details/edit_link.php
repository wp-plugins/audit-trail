<?php if (!defined ('ABSPATH')) die (); ?><?php _e ('Name', 'audit-trail'); ?>:<br/>
<input style="width: 95%" type="text" name="content" value="<?php echo htmlspecialchars ($link->link_name) ?>" readonly="readonly"/>
<br/>

<?php _e ('URL', 'audit-trail'); ?>:<br/>
<input style="width: 95%" type="text" name="content" value="<?php echo htmlspecialchars ($link->link_url) ?>" readonly="readonly"/>
<br/>

<?php _e ('Description', 'filled-in'); ?>:<br/>
<textarea rows="5" cols="5" readonly="readonly"><?php echo htmlspecialchars ($link->link_description)?></textarea><br/>

