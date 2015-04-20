<?php
/**
 * Login and registration page by AuthController
 *
 * @property CFormModel $model is the login form.
 * @property CFormModel $registerModel is the registration form.
 * @property Boolean $canRegister indicates that anonymous registrations are enabled.
 *
 * @package humhub.modules_core.user.views
 * @since 0.5
 */
$this->pageTitle = Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in');
?>

<div class="container" style="text-align: center;">
<?php $this->widget('application.widgets.LogoWidget', array('place' => 'login')); ?>
    <br>

<div class="container" style="text-align: center;">




    <?php if ($canRegister) : ?>
        <div id="register-form"
             class="panel panel-default animated bounceInLeft"
             style="max-width: 850px; margin: 0 auto 20px; text-align: left;">

            <div class="panel-heading" style="text-align: center;"><?php echo Yii::t('UserModule.views_auth_login', '<strong><font color="7acc6e">Shopping is relevant again.</font></strong>') ?></div>

            <div class="panel-body">

                <p><?php echo Yii::t('UserModule.views_auth_login', '<font size="4"><strong>You’re friends with your friends for a reason.</strong> They have good taste, know a lot of cool things, and are similar to you. Now, when you want to buy something, Shopty lets your friends research and recommend the products and brands for you.
</font>'); ?></p>

<p><?php echo Yii::t('UserModule.views_auth_login', '<font size="4">Which smart watch does your tech-obsessed friend like? What headphones does your classmate who DJs professionally use? Which denim jackets does your fashionista cousin love?
</font>'); ?></p>


<p><?php echo Yii::t('UserModule.views_auth_login', '<font size="4"><strong>Shopty is a social e-commerce site where you can see just that.</strong> Users create profiles recommending products and brands that they know and own. On Shopty, users discover only relevant products and receive only personalized recommendations. We’re making shopping what it should be – social yet personalized, simple yet fun.

</font>'); ?></p>

                <p><?php echo Yii::t('UserModule.views_auth_login', '<font size="4"><strong><font color="7acc6e">Shopping needs a makeover. Let’s redefine the experience.</font>Enter your email below and we’ll add you to our early invite list.</strong></font> 
'); ?></p>
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'account-register-form',
                    'enableAjaxValidation' => false,
                ));
                ?>

                <div class="form-group">
                    <?php echo $form->textField($registerModel, 'email', array('class' => 'form-control', 'id' => 'register-email', 'placeholder' => Yii::t('UserModule.views_auth_login', 'Enter your email address
'))); ?>
                    <?php echo $form->error($registerModel, 'email'); ?>
                </div>
                <hr>
                <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Get Early Access'), array('class' => 'btn btn-primary')); ?>

                <?php $this->endWidget(); ?>
            </div>
        </div>

    <?php endif; ?>


</div>

<script type="text/javascript">
    $(function() {
        // set cursor to login field
        $('#login_username').focus();
    })

    // Shake panel after wrong validation
<?php if ($form->errorSummary($model) != null) { ?>
        $('#login-form').removeClass('bounceIn');
        $('#login-form').addClass('shake');
        $('#register-form').removeClass('bounceInLeft');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

    // Shake panel after wrong validation
<?php if ($form->errorSummary($registerModel) != null) { ?>
        $('#register-form').removeClass('bounceInLeft');
        $('#register-form').addClass('shake');
        $('#login-form').removeClass('bounceIn');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

</script>


