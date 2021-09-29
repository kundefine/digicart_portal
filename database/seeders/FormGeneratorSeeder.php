<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\FormGenerator;
use Illuminate\Database\Seeder;

class FormGeneratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormGenerator::create([
            "admin_id" => Admin::first()->id,
            "uuid" => "7695572f-beab-4843-9d87-6c4f8a06be69",
            "name" => "Domain Form",
            "content" => '[{"id":"d440c397-e63f-480b-8e9b-68607ef6c6f5","title":"Input Field","tagName":"input","name":"domain_name","label":"Domain Name","placeholder":"Ex: xyz.com, xyz.net","value":null,"type":"text","class":null},{"id":"7dd7cdc0-f107-48fc-90a4-a2eadfef5caf","title":"Datepicker","tagName":"datepicker","name":"domain_start_date","label":"Start Date","placeholder":null,"value":null,"type":"text","class":null,"altFormat":"d-m-y","dateFormat":"Y-m-d"},{"id":"85ac8a5f-f50e-41df-b01e-3320e225b531","title":"Datepicker","tagName":"datepicker","name":"domain_end_date","label":"End Date","placeholder":null,"value":null,"type":"text","class":null,"altFormat":"d-m-Y","dateFormat":"Y-m-d"}]'
        ]);
    }
}
