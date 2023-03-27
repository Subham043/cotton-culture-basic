<?php

namespace App\Modules\Enquiries\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Enquiries\Exports\EnquiryExport;
use Maatwebsite\Excel\Facades\Excel;

class EnquiryExcelController extends Controller
{

    public function get(){
        return Excel::download(new EnquiryExport, 'enquiry.xlsx');
    }
}
