<?php

namespace App\Modules\Enquiries\Exports;

use App\Modules\Enquiries\Models\Enquiry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EnquiryExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Id',
            'First Name',
            'Last Name',
            'Phone',
            'Email',
            'Message',
            'Created_at',
            'Updated_at'
        ];
    }
    public function map($enquiry): array
    {
         return[
             $enquiry->id,
             $enquiry->first_name,
             $enquiry->last_name,
             $enquiry->phone,
             $enquiry->email,
             $enquiry->message,
             $enquiry->created_at,
             $enquiry->updated_at,
         ];
    }
    public function collection()
    {
        return Enquiry::all();
    }
}
