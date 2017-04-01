<?php
/**
 * Created by PhpStorm.
 * User: haitt
 * Date: 4/1/2017
 * Time: 4:16 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_name', 'project_image_header', 'project_image_ads', 'is_current',
    ];

    /**
    * Get the position record associated with the user.
    */
    public function position()
    {
        return $this->hasOne('App\Position', 'project_id', 'id');
    }

    /**
     * Get the customer record associated with the user.
     */
    public function customers()
    {
        return $this->hasMany('App\Position', 'project_id', 'id');
    }
}