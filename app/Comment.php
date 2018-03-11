<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
     
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

     /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
    * The name of the "created at" column.
    * @var string
    */
   const CREATED_AT = 'created_at';

    /**
     * The name of the "updated at" column.
     * @var string
     */
    const UPDATED_AT = 'updated_at';

    /**
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Indicates if the model should be timestamped.
     * @var bool
     */
    public $timestamps = true;

     # This property!
    protected $fillable = ['body'];

    // comment -> post

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
