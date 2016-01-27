<?php 
global $user_identity, $user_ID;	
	// If user is logged in or registered, show dashboard links in panel
if (is_user_logged_in()) { 
	?>
	<!-- The tab on top -->	
	<div class="tab usr">

		<span class="follow">
			<a target="_blank" href="http://www.facebook.com/pages/Sheffield-Green-Party/175900643477"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Facebook" class="header-facebook"/></a>
			<a target="_blank" href="http://twitter.com/sheffieldgreens"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter" class="header-twitter"/></a>
			<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" alt="RSS" class="header-rss"/></a>
			<a href="http://eepurl.com/bcDkFr"><img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="Email" class="header-email"/></a>
			<a href="http://www.youtube.com/user/sheffieldgreenparty/"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="Youtube" class="header-youtube"/></a>  
		</span>

		<span id="login_options" class="top-header-options">
			<ul class="login">
				<!-- Logout -->
				<li id="toggle">
					<a id="open" class="open" href="#">Account Options</a>
					<a id="close" style="display: none;" class="close" href="#">Close Options</a>	
				</li>
				<li><a href="<?php echo wp_logout_url(get_permalink()); ?>" rel="nofollow" title="<?php _e('Log out','sheffieldgreens'); ?>"><?php _e('Log out','sheffieldgreens'); ?></a></li>
			</ul> 
		</span>

		<span id="new_utilities" class="top-header-utilities"> 
			<a class="nu_join" href="http://join.greenparty.org.uk/">Join Us</a> 
			<a class="nu_donate" href="http://sheffieldgreenparty.org.uk/about-us/donate/">Donate</a> 

		</span>

	</div> <!-- / top -->

	<?php 
	// Else if user is not logged in, show login and register forms
} else {	
	?>

	<!-- The tab on top -->	
	<div class="tab gst">

		<span class="follow">
			<a target="_blank" href="http://www.facebook.com/pages/Sheffield-Green-Party/175900643477"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Facebook"/></a>
			<a target="_blank" href="http://twitter.com/sheffieldgreens"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter"/></a>
			<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss.png" alt="RSS"/></a>
			<a href="http://eepurl.com/bcDkFr"><img src="<?php bloginfo('template_directory'); ?>/images/email.png" alt="Email"/></a> 
			<a href="http://www.youtube.com/user/sheffieldgreenparty/"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="Youtube"/></a>
		</span>

		<span id="login_options" class="top-header-options">
			<ul class="login">
				<!-- Login / Register -->
				<li id="toggle">
					<a id="open" class="open" href="#">Login/Register</a>
        <!--				<a id="reg_" class="reg_" href="<?php echo site_url('wp-signup.php?action=register', 'login_post') ?>">Register</a>
    -->				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
</li>
</ul> 
</span>

<span id="new_utilities" class="top-header-utilities"> 
	<a class="nu_join" href="http://join.greenparty.org.uk/">Join Us</a> 
	<a class="nu_donate" href="http://sheffieldgreenparty.org.uk/about-us/donate/">Donate</a> 

</span>


</div> <!-- / top -->			
<?php } ?>	

<div id="toppanel"> 

	<?php 
	global $user_identity, $user_ID;	
	// If user is logged in or registered, show dashboard links in panel
	if (is_user_logged_in()) { 
		?>

		<div id="panel">

			<div class="content clearfix">

				<div class="left narrow">			
					<h2>My Account</h2>				
					<ul>
						<li><?php echo get_avatar( $user_ID, $size = '110' ); ?></li>					
						<li><a href="<?php bloginfo('url') ?>/wp-admin/index.php">Dashboard</a></li>
						<li><a href="<?php bloginfo('url') ?>/wp-admin/profile.php">Edit My Profile</a></li>
						<?php if ( current_user_can('level_1') ) : ?>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/edit-comments.php">Comments</a></li>
						<?php endif ?>
						<li><a href="<?php echo wp_logout_url(get_permalink()); ?>" rel="nofollow" title="<?php _e('Log out','sheffieldgreens'); ?>"><?php _e('Log out','sheffieldgreens'); ?></a></li>
					</ul>	
					<?php if ( current_user_can('level_10') ) : ?>		
						<h2>Appearance</h2>				
						<ul>						
							<li><a href="<?php bloginfo('url') ?>/wp-admin/themes.php">Themes</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/nav-menus.php">Menus</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/widgets.php">Widgets</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/theme-editor.php">Theme Editor</a></li>
						</ul>
					<?php endif ?>
				</div>
				<?php if ( current_user_can('level_2') ) : ?>
					<div class="left narrow">			
						<h2>Posts</h2>				
						<ul>					
							<li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">New Post</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/edit.php">Edit Posts</a></li>
							<?php if ( current_user_can('level_3') ) : ?>
								<li><a href="<?php bloginfo('url') ?>/wp-admin/edit-tags.php?taxonomy=post_tag">Tags</a></li>
								<li><a href="<?php bloginfo('url') ?>/wp-admin/edit-tags.php?taxonomy=category">Categories</a></li>
							<?php endif ?>
						</ul>
						<?php if ( current_user_can('level_10') ) : ?>		
							<h2>Plugins</h2>				
							<ul>						
								<li><a href="<?php bloginfo('url') ?>/wp-admin/plugins.php">Plugins</a></li>
								<li><a href="<?php bloginfo('url') ?>/wp-admin/plugin-install.php">Install a Plugin</a></li>
								<li><a href="<?php bloginfo('url') ?>/wp-admin/plugin-editor.php">Plugin Editor</a></li>
							</ul>
						<?php endif ?>
					</div>
				<?php endif ?>
				<?php if ( current_user_can('level_2') ) : ?>
					<div class="left narrow">
						<?php if ( current_user_can('level_3') ) : ?>	
							<h2>Pages</h2>				
							<ul>		
								<li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php?post_type=page">New Page</a></li>
								<li><a href="<?php bloginfo('url') ?>/wp-admin/edit.php?post_type=page">Edit Pages</a></li>
							</ul>
						<?php endif ?>			
						<h2>Library</h2>				
						<ul>					
							<li><a href="<?php bloginfo('url') ?>/wp-admin/upload.php">Library</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/media-new.php">Add New</a></li>
						</ul>
						<?php if ( current_user_can('level_3') ) : ?>		
							<h2>Users</h2>				
							<ul>						
								<li><a href="<?php bloginfo('url') ?>/wp-admin/users.php">Author &amp; Users</a></li>
								<li><a href="<?php bloginfo('url') ?>/wp-admin/user-new.php">Add New</a></li>
							</ul>
						<?php endif ?>
					</div>
				<?php endif ?>
				<?php if ( current_user_can('level_10') ) : ?>
					<div class="left narrow">			
						<h2>Settings</h2>				
						<ul>						
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options-general.php">General</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options-writing.php">Writing</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options-reading.php">Reading</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options-discussion.php">Discussion</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options-media.php">Media</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options-privacy.php">Privacy</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options-permalink.php">Permalinks</a></li>
							<li><a href="<?php bloginfo('url') ?>/wp-admin/options.php">All Settings</a></li>
						</ul>
					</div>
				<?php endif ?>
			</div>
		</div> <!-- /login -->	

		<?php 
	// Else if user is not logged in, show login and register forms
	} else {	
		?>

		<div id="panel">

			<div class="content clearfix flat-form">
				<ul class="idTabs login_tabs"> 
					<li class="pop_login">
						<a href="#pop_login">Login</a>
					</li>
					<li class="pop_register">
						<a href="#pop_register">Register</a>
					</li>
					<li class="pop_lostpassword">
						<a href="#pop_lostpassword">Lost Password</a>
					</li>
				</ul>
				<div id="pop_login" class="form-action">
					<!-- Login Form -->
					<form class="clearfix" action="<?php bloginfo('url') ?>/wp-login.php" method="post">
						<h1>User Login.</h1>
						<input class="field" type="text" name="log" id="log" value="username" size="23" onfocus="if (this.value == 'username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'username';}"/>
						<input class="field" value="password" type="password" name="pwd" id="pwd" size="23" onfocus="if (this.value == 'password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'password';}" />
						<input type="submit" name="submit" value="Login" class="button" />
						<div class="squaredOne">
							<input name="rememberme" id="squaredOne" type="checkbox" value="forever" />
							<label for="squaredOne"></label>
						</div>
						<span id="label_remember"><label>Rememeber me</label></span>
						<div class="clear"></div>
						<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/>
					</form>
				</div>
				<div id="pop_register" class="right form-action">
					<?php if (get_option('users_can_register')) : ?>	
						<!-- Register Form -->
						<form name="registerform" id="registerform" action="<?php echo site_url('wp-signup.php?action=register', 'login_post') ?>" method="post">
							<h1>Register.</h1>	
							<label id="reg_passmail"><?php _e('Welcome to the Sheffield Green Party Website. If you are already registered on this site, please use the form on the left to login.<br /><br />All new user, please click below to register. You will be redirected to our registration page. Your password will be emailed to you shortly after registration.<br />
								<br /><strong>For terms of use, please see privacy policy</strong>','sheffieldgreens') ?></label>
								<input type="submit" name="wp-submit" id="wp-submit" value="<?php _e('Register','sheffieldgreens'); ?>" class="button" />
							</form>
						<?php else : ?>
							<h1>Registration is closed</h1>
							<p>Sorry, you are not allowed to register yourself on this site!</p>
							<p>You must request an invitation by email at <b>info{at}sheffieldgreenparty.org.uk</b>.</p>

						<?php endif ?>			
					</div>
					<div id="pop_lostpassword" class="form-action">
						<h1>Reset your password.</h1>

						<form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="wp-user-form">
							<div class="username">
								<label for="user_login" class="hide"><?php _e('Username or Email','sheffieldgreens'); ?>: </label>
								<input type="text" name="user_login" value="Username or Email" size="20" id="user_login" tabindex="1001" onfocus="if (this.value == 'Username or Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username or Email';}"/>
							</div>
							<div class="login_fields">
								<?php do_action('login_form', 'resetpass'); ?>
								<input type="submit" name="user-submit" value="<?php _e('Reset my password','sheffieldgreens'); ?>" class="button" tabindex="1002" />

								<?php if (isset($_POST['reset_pass'])){
									global $wpdb;
									$username = trim($_POST['user_login']);
									$user_exists = false;
        // First check by username
									if ( username_exists( $username ) ){
										$user_exists = true;
										$user = get_user_by('login', $username);
									}
        // Then, by e-mail address
									elseif( email_exists($username) ){
										$user_exists = true;
										$user = get_user_by_email($username);
									}else{
										$error[] = '<p>'.__('Username or Email was not found, try again!').'</p>';
									}
									if ($user_exists){
										$user_login = $user->user_login;
										$user_email = $user->user_email;

										$key = $wpdb->get_var($wpdb->prepare("SELECT user_activation_key FROM $wpdb->users WHERE user_login = %s", $user_login));
										if ( empty($key) ) {
                // Generate something random for a key...
											$key = wp_generate_password(20, false);
											do_action('retrieve_password_key', $user_login, $key);
                // Now insert the new md5 key into the db
											$wpdb->update($wpdb->users, array('user_activation_key' => $key), array('user_login' => $user_login));
										}

            //create email message
										$message = __('Someone has asked to reset the password for the following site and username.','sheffieldgreens') . "\r\n\r\n";
										$message .= get_option('siteurl') . "\r\n\r\n";
										$message .= sprintf(__('Username: %s','sheffieldgreens'), $user_login) . "\r\n\r\n";
										$message .= __('To reset your password visit the following address, otherwise just ignore this email and nothing will happen.','sheffieldgreens') . "\r\n\r\n";
										$message .= network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') . "&redirect_to=".urlencode(get_option('siteurl'))."\r\n";
            //send email meassage
										if (FALSE == wp_mail($user_email, sprintf(__('[%s] Password Reset','sheffieldgreens'), get_option('blogname')), $message))
											$error[] = '<p>' . __('The e-mail could not be sent.','sheffieldgreens') . "<br />\n" . __('Possible reason: your host may have disabled the mail() function...','sheffieldgreens') . '</p>';
									}
									if (count($error) > 0 ){
										foreach($error as $e){
											echo $e . "<br/>";
										}
									}else{
										echo '<p>'.__('A message will be sent to your email address.').'</p>'; 
									}
								}?> 
								<input type="hidden" name="reset_pass" value="1" />
								<input type="hidden" name="user-cookie" value="1" />
							</div>
						</form>
						<label><a class="lost-pwd hide" href="<?php bloginfo('url') ?>/wp-login.php/?action=lostpassword">Lost your password?</a></label>	
					</div>
				</div>
			</div> <!-- /login -->	

			<?php } ?>	

		</div>