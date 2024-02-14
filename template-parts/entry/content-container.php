<?php
/**
 * 展示页面的内容部分，包括输入密码表单（外部模板）、正文
 * Template part for displaying post content 
 *
 */
?>
<div class="post-content <?php echo get_option('argon_enable_heti') == 'true' ? 'heti' : ''; ?>" id="post_content">
    <?php if ( post_password_required() ){ 
            do_action( 'argon_entry_content_passwd_required' );
        }else{
            do_action( 'argon_entry_content_no_passwd_required', $args );
        }
    ?>
</div>
