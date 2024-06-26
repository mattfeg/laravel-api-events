<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class RoomSeeder extends Seeder
{
    private const VALUES = [
        [
            'id' => '164d7662-9311-4d7a-a556-c75bbef45b31',
            'name' => 'Jeff Bezos',
        ],
        [
            'id' => '0c4bf853-48a0-42a2-92b8-4c01698b0910',
            'name' => 'Quarto 02',
        ],
        [
            'id' => '56ea4e1c-e071-4b20-8bfb-3b9ed02803e5',
            'name' => 'Sala Especial',
        ],
    ];

    public function run(): void
    {
        DB::table(Room::getTableName())->truncate();

        foreach (self::VALUES as $item) {
            $object = new Room();
            $object->fill($item);

            $object->saveOrFail();
        }
    }
}
