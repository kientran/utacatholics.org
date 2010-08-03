<?php
/**
  * The Main Template file.
**/

get_header(); ?>

<div id="content">
<div class="container">
<div id="article-container">

  <h1>New Student Registration</h1>
  <p>If you are not a student, please use our <a href="<?php echo get_bloginfo('url'); ?>/contact">contact form</a> to get in touch with us</p>
  <?php

    require_once( TEMPLATEPATH . '/php/validate-email.php' );
    if( isset( $_POST['Submit'] ) ) {

      $error = "";
      if($_POST['contact_name']=='')$error.="Name required.<br/>";
      if($_POST['contact_email']=='')$error.="Email required.<br/>";
      if($_POST['contact_phone']=='')$error.="Phone required.<br/>";
      if($_POST['contact_studentid']=='')$error.="Student ID required.<br/>";

      if( !validEmail( $_POST['contact_email'] ) )$error.="Email invalid.<br/>";
       
      if( $error != "" ) {
        echo "<span style='color:red'>$error</span>";
      } else {

        $to = get_option('admin_email');
        $subject = "Registration Form: ". $_POST['contact_name']; 
        $body = "\r\n Campus Minister,";
        $body .= "\r\n Someone has registered via the website:";
        $body .= "\r\n Name: \t" . $_POST['contact_name'];
        $body .= "\r\n Email: \t" . $_POST['contact_email'];
        $body .= "\r\n Phone: \t" . $_POST['contact_phone'];
        $body .= "\r\n Student ID: \t" . $_POST['contact_studentid'];

        wp_mail( $to, $subject, $body);
        echo "<span style='color:green;'>Your Comment was sent!</span>";
      }

    }
  ?> 
  <form id="contact_form" name="contact_form" method="post" action="<?php echo the_permalink(); ?>">
    <table>
      <tr>
        <td>Name</td>
        <td><input name="contact_name" type="text" id="contact_name" style="width:300px" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="contact_email" type="email" id="contact_email" style="width:300px" /></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input name="contact_phone" type="tel" id="contact_phone" style="width:300px" /></td>
      </tr>
      <tr>
        <td>Student ID</td>
        <td><input name="contact_studentid" type='number' id="contact_studentid" style="width:300px"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" />
          <input type="reset" name="Reset" value="Reset" /></td>
      </tr>
    </table>
  </form>

</div>
<?php //get_sidebar(); ?>

</div> <!-- .container -->
</div> <!-- #content -->


<?php get_footer(); ?>
