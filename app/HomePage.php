<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class HomePage extends Model

{

    protected $table = 'homepage';



    protected $fillable = [

        'section',
        'heading',
        'sub_heading',
        'detail',
        'btn_link',
        'btn_link_1',
        'logo',
        'btn_text',
        'btn_text_1',
        'updated_at',
        'created_at',



    ];



}

