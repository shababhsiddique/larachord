<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;

class AdminApiController extends Controller {

    public function savePageData(Request $request) {
        //get all POST data
        $formArray = $request->post();

        //unset token
        unset($formArray['token']);

        foreach ($formArray as $blockName => $blockUpdate) {
            
            $block = Block::findByName($blockName);
            $block->block_html = $blockUpdate;
            $block->save();
        }

        $array = ['ok'];
        return response()->json($array, 200);
    }

}
