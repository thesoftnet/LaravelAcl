<?php
namespace TheSoftNet\LaravelAcl\Authentication\Classes\Captcha;

/**
 * Class CaptchaValidator
 *
 * @author Anwar thesoftnet4u@gmail.com
 */
interface CaptchaValidatorInterface
{
    public function validateCaptcha($attribute, $value);

    public function getValue();

    /**
     * @return mixed
     */
    public function getErrorMessage();

    public function getImageSrcTag();
}