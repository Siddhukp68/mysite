<?php
/**
 * Template Name: Contact Page
 *
 * Simple contact form template. Sends the message to the site admin email.
 */

$status = '';

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['contact_nonce'] )
    && wp_verify_nonce( $_POST['contact_nonce'], 'send_contact' ) ) {

    $name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    if ( $name && is_email( $email ) && $message ) {
        $sent   = wp_mail(
            get_option( 'admin_email' ),
            'New message from ' . $name,
            $message . "\n\nFrom: " . $name . ' <' . $email . '>',
            array( 'Reply-To: ' . $email )
        );
        $status = $sent ? 'sent' : 'failed';
    } else {
        $status = 'invalid';
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; color: #222; }
        .contact { max-width: 560px; margin: 0 auto; padding: 3rem 1.25rem; }
        .contact label { display: block; margin: 1rem 0 .25rem; font-weight: 600; }
        .contact input, .contact textarea { width: 100%; padding: .6rem; box-sizing: border-box; }
        .contact button { margin-top: 1.25rem; padding: .7rem 1.5rem; cursor: pointer; }
        .notice { padding: .75rem 1rem; margin: 1rem 0; border-radius: 4px; background: #eef; }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main class="contact">
    <h1><?php the_title(); ?></h1>

    <?php if ( 'sent' === $status ) : ?>
        <p class="notice">Thanks! Your message was sent.</p>
    <?php elseif ( 'failed' === $status ) : ?>
        <p class="notice">Sorry, the message could not be sent.</p>
    <?php elseif ( 'invalid' === $status ) : ?>
        <p class="notice">Please fill in all fields with a valid email.</p>
    <?php endif; ?>

    <form method="post">
        <?php wp_nonce_field( 'send_contact', 'contact_nonce' ); ?>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" required></textarea>

        <button type="submit">Send</button>
    </form>
</main>

<?php wp_footer(); ?>
</body>
</html>