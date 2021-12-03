<?php

namespace App\AltrpModels;

use Illuminate\Database\Eloquent\Model as Model;
use App\Altrp\Generators\Traits\UserColumnsTrait;
use App\Traits\RelationshipsTrait;

// CUSTOM_NAMESPACES_BEGIN - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

// CUSTOM_NAMESPACES_END - IMPORTANT: Don't remove this comment! Write your namespaces between these comments.

class startup extends Model
{
    // CUSTOM_TRAITS_BEGIN - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    
    // CUSTOM_TRAITS_END - IMPORTANT: Don't remove this comment! Write your traits between these comments.
    use UserColumnsTrait, RelationshipsTrait;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'startups';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','status_stage_id','description','status_sertificate','contact_fio','contact_person','legal_name','legal_inn','site_url','rank','media_id','cases','coming_ackselerator','contact_phone','organization_of_interesting','inquiry_to_ackselerator','on_moderated','benefit','link_presentation','contact_email'];

    /**
     * Relations that should be always with.
     *
     * @var array
     */
    protected $altrp_with = [];

    // CUSTOM_PROPERTIES_BEGIN - IMPORTANT: Don't remove this comment! Write your properties between these comments.
    
    // CUSTOM_PROPERTIES_END - IMPORTANT: Don't remove this comment! Write your properties between these comments.

    // ACCESSORS - IMPORTANT: Don't remove this comment!
    
    // ACCESSORS - IMPORTANT: Don't remove this comment!

    // RELATIONSHIPS
    public function pilot_project()
    {
        return $this->hasMany('App\AltrpModels\pilot_project', 'startup_id', 'id');
    }

    public function startup_branch()
    {
        return $this->hasMany('App\AltrpModels\startup_branch', 'startup_id', 'id');
    }

    public function startup_technology()
    {
        return $this->hasMany('App\AltrpModels\startup_technology', 'startup_id', 'id');
    }

    public function comment_startup()
    {
        return $this->hasMany('App\AltrpModels\comment_startup', 'startup_id', 'id');
    }

    public function flow()
    {
        return $this->hasMany('App\AltrpModels\flow', 'startup_id', 'id');
    }

    public function favorite()
    {
        return $this->hasMany('App\AltrpModels\favorite', 'startup_id', 'id');
    }

    public function startup_news()
    {
        return $this->hasMany('App\AltrpModels\startup_news', 'startup_id', 'id');
    }

    public function status_stage()
    {
        return $this->belongsTo('App\AltrpModels\status_stage', 'status_stage_id', 'id');
    }

    public function media_alt()
    {
        return $this->belongsTo('App\AltrpModels\media_alt', 'media_id', 'id');
    }

    public function org()
    {
        return $this->belongsTo('App\AltrpModels\org', 'organization_of_interesting', 'id');
    }

    public function count_person()
    {
        return $this->belongsTo('App\AltrpModels\count_person', 'contact_person', 'id');
    }

    
    // RELATIONSHIPS

    // CUSTOMIZERS_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOMIZERS_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.

    // CUSTOM_METHODS_BEGIN - IMPORTANT: Don't remove this comment! Write your methods between these comments.
    
    // CUSTOM_METHODS_END - IMPORTANT: Don't remove this comment! Write your methods between these comments.
}
