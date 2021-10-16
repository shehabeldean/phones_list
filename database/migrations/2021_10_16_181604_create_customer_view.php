<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCustomerView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW customer_view AS
        
          SELECT 
            customer.id as id, 
            customer.name, 
            customer.phone,
            substr(customer.phone, 1, instr(customer.phone, ' ') - 1) as country_code
 
          FROM `customer` 
        
      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS customer_view');
    }
}
