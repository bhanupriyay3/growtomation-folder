<?php
/*
Plugin Name: Simple Contact Form
Plugin URI: http://example.com/simple-contact-form
Description: A plugin to add a basic contact form to the site, allowing users to send messages to the admin.
Version: 1.0
Author: Your Name
Author URI: http://example.com
License: GPL2
*/

// Function to display the contact form
function scf_display_form() {
    ob_start();
    ?>
    <h2>Get in touch with us!</h2>
    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
        <p>
            <label for="scf-name">Name <span>*</span></label>
            <input type="text" id="scf-name" name="scf-name" pattern="[a-zA-Z0-9 ]+" value="<?php echo (isset($_POST['scf-name']) ? esc_attr($_POST['scf-name']) : ''); ?>" required>
        </p>
        <p>
            <label for="scf-email">Email <span>*</span></label>
            <input type="email" id="scf-email" name="scf-email" value="<?php echo (isset($_POST['scf-email']) ? esc_attr($_POST['scf-email']) : ''); ?>" required>
        </p>
        <p>
            <label for="scf-message">Message <span>*</span></label>
            <textarea id="scf-message" name="scf-message" required><?php echo (isset($_POST['scf-message']) ? esc_attr($_POST['scf-message']) : ''); ?></textarea>
        </p>
        <p>
            <input type="submit" name="scf-submitted" value="Send">
        </p>
    </form>
    <?php
    return ob_get_clean();
}

// Function to handle form submission
function scf_handle_form_submission() {
    if (isset($_POST['scf-submitted'])) {
        $name = sanitize_text_field($_POST['scf-name']);
        $email = sanitize_email($_POST['scf-email']);
        $message = sanitize_textarea_field($_POST['scf-message']);

        // $to = get_option('admin_email');
        $to = 'bhanupriyay3@gmail.com';
        $subject = "New Contact Form Submission from $name";
        $headers = "From: $name <$email>" . "\r\n";

        // Log the form data for debugging
        error_log("Contact Form Submission: Name: $name, Email: $email, Message: $message");

        if (wp_mail($to, $subject, $message, $headers)) {
            echo '<div>Thank you for your message. We will get back to you shortly.</div>';
        } else {
            error_log('Contact Form: Email failed to send.');
            echo '<div>There was an error sending your message. Please try again later.</div>';
        }
    }
}

// Shortcode to display the form
function scf_form_shortcode() {
    ob_start();
    scf_handle_form_submission();
    echo scf_display_form();
    return ob_get_clean();
}
add_shortcode('simple_contact_form', 'scf_form_shortcode');

// Enqueue necessary styles
function scf_enqueue_styles() {
    wp_enqueue_style('scf-style', plugins_url('simple-contact-form.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'scf_enqueue_styles');
?>
