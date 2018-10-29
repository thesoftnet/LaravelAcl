<?php  namespace TheSoftNet\LaravelAcl\Authentication\Models;

/**
 * Class ProfileTypeField
 *
 * @author Anwar thesoftnet4u@gmail.com
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