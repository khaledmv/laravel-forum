<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'view', 'answers', 'votes'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttrubute(){
        $this->attributes['title'] = $value;
        $this->attributes['slug']  = Str::slug($value);
    }

    public function getUrlAttribute(){

        // $slug = Str::slug($this->slug, '-');
        // // return route("question.show",  );
        return route("question.show", $this->slug);
        
    }

   public function getCreatedDateAttribute(){
       return $this->created_at->diffForHumans();
   }

   public function getBodyHtmlAttribute(){
    //    return \Parsedown::instance()->text($this->body);
   }

}
