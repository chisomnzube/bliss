<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    protected $fillable = ['password', 'security_question', 'security_answer',  'title', 'fname', 'lname',  'mname', 'median_name', 'marital_status',  'gender', 'dob', 'pob',  'state', 'lga', 'city',  'nationality', 'residence_status', 'native_lang',  'other_lang', 'religion', 'education',  'employment_status', 'company', 'company_address',  'job_title', 'yoa', 'ecp',  'ecp_address', 'ecp_phone', 'relationship',  'ecp_psn', 'health_status', 'security_status',  'phone', 'email', 'facebook',  'twitter', 'linkedin', 'instagram',  'id_type', 'id_number', 'bank_name',  'bank_address', 'sort_code', 'account_type',  'account_number', 'tax', 'passport',  'psn', 'featured', ];
}
