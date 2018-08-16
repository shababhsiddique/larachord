<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model {

    //Defined Primary Key
    protected $primaryKey = "block_id";

    public static function findByIndex($blockIndex) {
        return self::where("block_index", $blockIndex)->first();
    }
    
    public static function findByName($blockName) {
        $block =  self::where("block_name", $blockName)->first();
        
        if(!$block){
            $block = new Block;
            $block->block_name = $blockName;
            $block->block_html = "no text added";
            $block->save();
            return $block;
        }
        return $block;
    }

}
