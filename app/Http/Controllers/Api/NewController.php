<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\News;
use App\Trait\GeneralTrait;
use Illuminate\Http\Request;

class NewController extends Controller
{
    use GeneralTrait;

    public function news()
    {
        $news = News::all();

        return $this->returnData($news, 'successfully return news', 200);
    }
    public function get_news(Request $request)
    {
        try {

            $news = News::where('id', $request->id)->first();

            return $this->returnData($news, 'successfully return news', 200);
        } catch (\Exception $ex) {
            return $this->returnData($news, 'Exception news', 200);
        }
    }
}
