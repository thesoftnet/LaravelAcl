<?php  namespace TheSoftNet\LaravelAcl\Authentication\Models;

/**
 * Class ProfileTypeField
 *
 * @author jacopo beschi jacopo@jacopobeschi.com
 */
class ProfileFieldType extends BaseModel
{
    protected $table = "profile_field_type";

    protected $fillable = ["description"];

    public function profile_field()
    {
        return $this->hasMany('TheSoftNet\LaravelAcl\Authentication\Models\ProfileField');
    }
} 