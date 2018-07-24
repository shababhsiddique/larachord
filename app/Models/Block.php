<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model {

    //Defined Primary Key
    protected $primaryKey = "block_id";

    public static function findByIndex($blockIndex) {
        return self::where("block_index", $blockIndex)->first();
    }

}
