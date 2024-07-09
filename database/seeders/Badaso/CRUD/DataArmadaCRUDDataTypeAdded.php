<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataArmadaCRUDDataTypeAdded extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();

        try {

            $data_type = Badaso::model('DataType')->where('name', 'data_armada')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_armada')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 3,
                'name' => 'data_armada',
                'slug' => 'data-armada',
                'display_name_singular' => 'Data Armada',
                'display_name_plural' => 'Data Armada',
                'icon' => 'local_taxi',
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\DataArmadaController',
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'is_maintenance' => 0,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'created_at' => '2024-07-07T05:41:09.000000Z',
                'updated_at' => '2024-07-09T10:08:56.000000Z',
            ));

            Badaso::model('Permission')->generateFor('data_armada');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-armada')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Data Armada',
                    'target' => '_self',
                    'icon_class' => 'local_taxi',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_armada',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-armada';
                $menu_item->title = 'Data Armada';
                $menu_item->target = '_self';
                $menu_item->icon_class = 'local_taxi';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_armada';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
