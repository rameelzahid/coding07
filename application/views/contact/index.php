<!-- ***************
Name: Rameel Zahid
Assignment: 07
Purpose: This is the display for the contact form
********************* -->
<h1>Contact Me</h1>
<div class="content-frm">
    <!-- Display the status message -->
    <?php if(!empty($status)){ ?>
    <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
    <?php } ?>
    
    <!-- Contact form -->
    <form action="" method="post">
     
        <div class="input-group">
            <input type="text" name="name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="NAME">
            <?php echo form_error('name','<p class="field-error">','</p>'); ?>
        </div>
        
        <div class="input-group">
            <input type="email" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="EMAIL@ADDRESS.COM">
            <?php echo form_error('email','<p class="field-error">','</p>'); ?>
        </div>
        
        <div class="input-group">
            <input type="text" name="subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" placeholder="SUBJECT">
            <?php echo form_error('subject','<p class="field-error">','</p>'); ?>
        </div>
        
        <div class="input-group">
            <textarea name="message" placeholder="YOUR MESSAGE"><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
            <?php echo form_error('message','<p class="field-error">','</p>'); ?>
        </div>

        <input type="submit" name="contactSubmit" class="frm-submit" value="Submit">
    </form>
</div>