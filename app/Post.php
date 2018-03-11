<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Comment;


class Post extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

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

    /**
     * Get the post record associated with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {

        // $this->comments()->create(['body' => $body]);

        $this->comments()->create(compact('body'));
        
        // DB::beginTransaction();
        // try {
        //     $comment = new Comment();
        //     $comment->body      = $body;
        //     $comment->post_id   = $this->id;
        //     $comment->save();

        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     \Log::info($e->getMessage());
        //     return redirect()->back()->withInput();
        // }
    }



}
