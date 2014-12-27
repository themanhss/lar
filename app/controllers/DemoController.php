<?php
/**
 * Created by PhpStorm.
 * User: manhnt
 * Date: 12/24/14
 * Time: 12:07 AM
 */

class DemoController extends BaseController {
    public function index(){
        return View::make("demo.index")->with('title','Manhnt xin chao cac ban');
    }
    public function getContent($id){
        return "Your ID : $id";
    }
}