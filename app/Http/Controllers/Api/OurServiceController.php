<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\OurService;
use App\Trait\GeneralTrait;
use Illuminate\Http\Request;

class OurServiceController extends Controller
{
    use GeneralTrait;

    public function get_services()
    {
        $get_services = OurService::all();
        return $this->returnData($get_services, 'successfully return all our services', 200);
    }

    public function service(Request $request)
    {
        $service = OurService::find($request->id);

        if ($service) {
            return $this->returnData($service, 'successfully return our service', 200);
        }
        return $this->returnData('Error', 'Not Found  our service', 401);
    }
}
