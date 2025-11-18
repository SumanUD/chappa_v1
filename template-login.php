<?php
/**
 * Template Name: Login
 * Description: Page for user login
 */

get_header(); ?>

<div class="container">
    <div class="row" style="padding-top: 100px; padding-bottom: 100px;">
        <div class="col-md-4 col-md-offset-4">
            <div style="background: white; padding: 40px; border-radius: 5px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <h2 style="text-align: center; margin-bottom: 30px; font-size: 28px;">Login</h2>

                <?php
                if ( is_user_logged_in() ) {
                    echo '<p style="text-align: center; color: #27ae60;">You are already logged in. <a href="' . esc_url( home_url( '/my-account' ) ) . '">Go to your account</a></p>';
                } else {
                    ?>
                    <form method="post" action="<?php echo esc_url( wp_login_url( home_url( '/my-account' ) ) ); ?>" style="display: none;">
                        <!-- This form is hidden; we'll use wp_login_form() instead -->
                    </form>

                    <?php
                    wp_login_form( array(
                        'redirect' => home_url( '/my-account' ),
                        'form_id' => 'loginform',
                        'label_username' => 'Email / Username',
                        'label_password' => 'Password',
                        'label_remember' => 'Remember Me',
                        'label_log_in' => 'Sign In',
                        'id_username' => 'user_login',
                        'id_password' => 'user_pass',
                        'id_remember' => 'rememberme',
                        'id_submit' => 'wp-submit',
                        'remember' => true,
                        'value_username' => '',
                        'value_remember' => false
                    ) );
                    ?>

                    <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee;">
                        <p style="margin: 10px 0; font-size: 14px;">
                            Don't have an account? 
                            <a href="<?php echo esc_url( wp_registration_url() ); ?>" style="color: #27ae60; text-decoration: none;">Register here</a>
                        </p>
                        <p style="margin: 10px 0; font-size: 14px;">
                            <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" style="color: #667eea; text-decoration: none;">Forgot password?</a>
                        </p>
                    </div>

                    <style>
                        #loginform {
                            display: block;
                        }

                        #loginform label {
                            display: block;
                            margin-bottom: 8px;
                            font-weight: 600;
                            color: #333;
                            font-size: 14px;
                        }

                        #loginform input[type="text"],
                        #loginform input[type="password"] {
                            width: 100%;
                            padding: 12px;
                            margin-bottom: 15px;
                            border: 1px solid #ddd;
                            border-radius: 3px;
                            box-sizing: border-box;
                            font-size: 14px;
                        }

                        #loginform input[type="text"]:focus,
                        #loginform input[type="password"]:focus {
                            outline: none;
                            border-color: #27ae60;
                            box-shadow: 0 0 5px rgba(39, 174, 96, 0.3);
                        }

                        #loginform input[type="checkbox"] {
                            margin-right: 8px;
                        }

                        #loginform .login-remember {
                            margin-bottom: 15px;
                            font-size: 14px;
                        }

                        #loginform .login-remember label {
                            display: inline;
                            margin: 0;
                            font-weight: normal;
                        }

                        #wp-submit {
                            width: 100%;
                            padding: 12px;
                            background: #27ae60;
                            color: white;
                            border: none;
                            border-radius: 3px;
                            font-size: 16px;
                            font-weight: 600;
                            cursor: pointer;
                            transition: background 0.3s ease;
                        }

                        #wp-submit:hover {
                            background: #229954;
                        }
                    </style>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
