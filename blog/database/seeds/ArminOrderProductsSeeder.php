<?php

use Illuminate\Database\Seeder;

class ArminOrderProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
		for ($y=1 ; $y <= 12; $y++) {
			for($i=1; $i<=5;$i++){
			 $data[] = [
			 	 'order_id' => $y,
				 'product_id' => $i,
				 'qty' => rand(1,4),
				 'title' => 'Casio test prod',
				 'price' =>  rand(40,200),
			 ]
			
		} 
			DB::table(table:'order_products')->insert(:$data)
    }
}
