<?php

namespace App\Modules\Enquiries\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Enquiries\Services\EnquiryService;

class EnquiryViewController extends Controller
{
    private $enquiryService;

    public function __construct(EnquiryService $enquiryService)
    {
        $this->enquiryService = $enquiryService;
    }

    public function get(Int $id){
        $data = $this->enquiryService->getById($id);
        return view('admin.pages.enquiry.view')->with(
            [
                'data' => $data
            ]
        );
    }
}
