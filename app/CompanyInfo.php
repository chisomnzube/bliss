<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $fillable = ['industry', 'toc', 'company_name', 'parent_company', 'office_address', 'branches', 'yoe', 'doi', 'employees', 'others', 'market', 'traded_as', 'stock_price', 'isin', 'rc', 'founded', 'founder', 'area_served', 'key_people', 'products', 'revenue', 'asc', 'market_cap', 'asset', 'equity', 'operating_income', 'net_income', 'subsidiary', 'website', 'email', 'phone', 'password', 'security_question', 'security_answer', 'reg_date', 'name', 'address', 'id_number', 'id_type', 'position', 'psn', 'security_status', 'rating', 'document', 'csn', 'featured',];
}
