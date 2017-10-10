<?php

namespace Tests\Feature;

use App\Item;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase; // Començem el test amb la base de dades buida

    public function testShowAllItems()
    {
        // 3 parts
        // 1 -> Preparo el test
        // 2 -> Executo el codi que vull provar
        // 3 -> Comprovo: assert

        factory(Item::class,50)->create();

        $response = $this->get('/items');
        $response->dump();
        $response->assertStatus(200);
        // TODO Contar que hi ha 50 al resultat
    }

    /**
    * @group todo
    */
    public function testShowAnEvent()
    {
        // Preparo
        $item = factory(Item::class)->create();
        //Executo
        $response = $this->get('/items/' , $item->id);
        //Comprovo
        $response->assertStatus(200);
        $response->assertSee($item->name);
        $response->assertSee($item->description);
    }

    /**
     * @group todo
     */
    public function testNoShowAnEvent()
    {
        //Executo
        $response = $this->get('/items/999999999999');
        //Comprovo
        $response->assertStatus(404);
    }

}
