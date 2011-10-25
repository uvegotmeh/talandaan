<h1>Create an Account</h1>
<h5><a style="color:oldlace;background: #0070a3; text-decoration: underline; font-family: verdana; border: 1px solid; border-color: #fff; padding: 5px; "href="http://localhost/talandaan/">Back to login</a></h5>

<fieldset>
    
    <legend>Personal Information</legend>
    <?php echo validation_errors('<p style="color:darkred;" class="error">'); ?>
    <?php 
            
        echo form_open('login/create_member');
        echo form_input('first_name', set_value('first_name', 'First name'));
        echo form_input('last_name', set_value('last_name', 'Last name'));
        echo form_input('email_address', set_value('email_address', 'Email Address'));
    ?>

</fieldset>

<fieldset>
    <legend>Login Information</legend>
    <?php
    echo form_input('username', set_value('username', 'Username'));
    echo form_password('password', set_value('password', 'Password'));
    echo form_password('password2', set_value('password2', 'Password Confirm'));
    
    
    echo form_submit('submit', 'Create Account');
    ?>
    
    
    
</fieldset>

