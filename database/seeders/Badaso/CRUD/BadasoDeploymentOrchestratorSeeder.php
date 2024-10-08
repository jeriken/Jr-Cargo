<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        
        
        $this->seed(DataVisitCRUDDataDeleted::class);
        $this->seed(DataVisitCRUDDataTypeAdded::class);
        $this->seed(DataVisitCRUDDataRowAdded::class);
        
        
        $this->seed(DataArmadaCRUDDataDeleted::class);
        $this->seed(DataArmadaCRUDDataTypeAdded::class);
        $this->seed(DataArmadaCRUDDataRowAdded::class);
    }
}
