<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';

    protected $fillable = ['header',  'body', 'footer','imagem'];

    public static function returnArticle($id){
        return self::select('noticia.text', 'noticia.imagem')
            ->where('noticia.id', $id)
            ->get();
    }

    public static function returnByCategory($category){
        return self::select('noticia.title','noticia.text', 'noticia.imagem', 'noticia.id')
            ->where('noticia.cat', $category)
            ->get();
    }


    public static function returnNoticias(){
        return self::select('noticia.title','noticia.text', 'noticia.imagem', 'noticia.id')
            ->get();
    }
}
