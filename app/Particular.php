<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'city', 'lga', 'state', 'country', 'address', 'occupation', 'dob', 'psn', 'tax', 'class', 'type', 'licence_number', 'por', 'model', 'model_code', 'manufactured_year', 'status', 'engine_number', 'chassis_number', 'color', 'body_type', 'origin', 'cylinder_capacity', 'rated_power', 'seating_capacity', 'propulsion', 'steering', 'tire_no', 'door_no', 'gps', 'airbag', 'tracker', 'insurance_company', 'policy_holder', 'policy_note', 'effective_date_from', 'effective_date_to', 'ecp_name', 'ecp_phone', 'ecp_email', 'ecp_city', 'ecp_lga', 'ecp_state', 'ecp_country', 'ecp_address', 'document', 'featured',];
}
