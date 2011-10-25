<div class="header">
    <div class="header_resize">
       <div class="logo">
        <h1><a href="http://localhost/talandaan"><span><cufon style="width: 140px; height: 40px;" alt="Talandaan" class="cufon cufon-canvas"><canvas style="width: 212px; height: 56px; top: -8px; left: -25px;" height="56" width="212"></canvas><cufontext>Talandaan</cufontext></cufon></span><cufon style="width: 88px; height: 40px;" alt="Box " class="cufon cufon-canvas"><canvas style="width: 171px; height: 56px; top: -8px; left: -25px;" height="56" width="171"></canvas><cufontext>Box </cufontext></cufon><small><br/><cufon style="width: 25px; height: 13px;" alt="Put " class="cufon cufon-canvas"><canvas style="width: 53px; height: 18px; top: -3px; left: -9px;" height="18" width="53"></canvas><cufontext>Put </cufontext></cufon><cufon style="width: 31px; height: 13px;" alt="your " class="cufon cufon-canvas"><canvas style="width: 58px; height: 18px; top: -3px; left: -9px;" height="18" width="58"></canvas><cufontext>your </cufontext></cufon><cufon style="width: 30px; height: 13px;" alt="things " class="cufon cufon-canvas"><canvas style="width: 58px; height: 18px; top: -3px; left: -9px;" height="18" width="58"></canvas><cufontext>things </cufontext></cufon><cufon style="width: 44px; height: 13px;" alt="to " class="cufon cufon-canvas"><canvas style="width: 72px; height: 18px; top: -3px; left: -9px;" height="18" width="72"></canvas><cufontext>to </cufontext></cufon><cufon style="width: 31px; height: 13px;" alt="do " class="cufon cufon-canvas"><canvas style="width: 59px; height: 18px; top: -3px; left: -9px;" height="18" width="59"></canvas><cufontext>do </cufontext></cufon></small></a><cufon style="width: 31px; height: 13px;" alt="Here" class="cufon cufon-canvas"><canvas style="width: 59px; height: 18px; top: -3px; left: -9px;" height="18" width="59"></canvas><cufontext>Here</cufontext></cufon></small></a></h1>
       </div>
    </div>
</div>

<div id="login_form">
    <h1>Login</h1>
    <?php echo validation_errors('<p style="color:red"; id="error">'); ?>
    
    
    <?php echo form_open('login/validate_credentials');?>
    <label>Username</label>
    <?php echo form_input('username');?>
    <label>Password</label>
    <?php echo form_password('password');?>
    <?php
    echo form_submit('submit', 'Login');
    echo anchor('login/signup', 'Create Account');
    ?>
    
</div>