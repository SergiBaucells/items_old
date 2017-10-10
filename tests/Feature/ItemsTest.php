<?php

namespace Tests\Feature;

use App\Item;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItemsTest extends TestCase
{
    use RefreshDatabase; // Començem el test amb la base de dades buida

    /**
     * @group todo
     *
     * @test
     */
    public function testShowAllItems()
    {
        // 3 parts
        // 1 -> Preparo el test
        $items = factory(Item::class,50)->create();
        // 2 -> Executo el codi que vull provar
        $response = $this->get('/items');
        // 3 -> Comprovo: assert
        $response->assertStatus(200);
        $response->assertSuccessful();
        $response->assertViewIs('list_items');
        // TODO Contar que hi ha 50 al resultat

        foreach ($items as $item) {
            $response->assertSeeText($item->name);
            $response->assertSeeText($item->description);
        }

    }

    /**
    *
    */
    public function testShowAnItem()
    {
        // Preparo
        $item = factory(Item::class)->create();
        //Executo
        $response = $this->get('/items/' , $item->id);
        //Comprovo
        $response->assertStatus(200);
        $response->assertSuccessful();
        $response->assertViewIs('show_item');
        $response->assertViewHas('item');
        $response->assertSeeText($item->name);
        $response->assertSeeText($item->description);
        $response->assertSeeText('Item');
    }

    /**
     * @group todo
     */
    public function testNoShowAnItem()
    {
        //Executo
        $response = $this->get('/items/999999999999');
        //Comprovo
        $response->assertStatus(404);
    }

}
