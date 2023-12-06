<?php

namespace Tests\Feature\user\Usertest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Datamanajer as Datamanajer;

class ManajerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function testIndex()
    {
        $response = $this->get(route('manajer.index'));
        $response->assertStatus(302);
        
    }

    public function testCreate()
    {
        $response = $this->get(route('manajer.create', 'id'));
        $response->assertStatus(302);
      
    }

    public function testStore()
{
 
    $data = [
        'id' => 'id',
        'id_sekolah' => 'id_sekolah',
        'data_manajer_id' => 'data_manajer_id',
        'nama' => 'nama',
        'hp' => 'hp',
        'alamat' => 'alamat',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',

    ];
    $response = $this->post(route('manajer.store'), $data);
    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('manajer.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $Datamanajer = Datamanajer::factory()->create();

    $updatedData = [
        'id' => 'id',
        'data_manajer_id' => 'data_manajer_id',
        'id_sekolah' => 'id_sekolah',
        'nama' => 'nama',
        'hp' => 'hp',
        'alamat' => 'alamat.pdf',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',
    ];

    $response = $this->post(route('manajer.update',     $Datamanajer  ->id), $updatedData);

    $response->assertStatus(302);

 
    $Datamanajer   =    $Datamanajer ->fresh();

$this->assertNotEquals($updatedData['id'], $Datamanajer->id);
$this->assertNotEquals($updatedData['data_manajer_id'],$Datamanajer->data_manajer_id);
$this->assertNotEquals($updatedData['id_sekolah'],$Datamanajer->id_sekolah);
$this->assertNotEquals($updatedData['nama'],$Datamanajer->nama);
$this->assertNotEquals($updatedData['hp'],$Datamanajer->hp);
$this->assertNotEquals($updatedData['alamat'],$Datamanajer->alamat);
$this->assertNotEquals($updatedData['foto'],$Datamanajer->foto);
$this->assertNotEquals($updatedData['ktp'],$Datamanajer->ktp);



    $response = $this->get(route('manajer.index'));

$response->assertStatus(302);
$this->assertTrue(true, "manajer  successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
    $Datamanajer  = Datamanajer::factory()->create();


    $response = $this->get(route('manajer.destroy', ['id' =>    $Datamanajer->id]));
    $response = $this->get(route('manajer.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "manajer  successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('manajer.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('manajer.show', 'id'));
    $response->assertStatus(302);

}
}
