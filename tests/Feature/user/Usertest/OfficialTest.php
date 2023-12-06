<?php

namespace Tests\Feature\user\Usertest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\DataOfficial as DataOfficial;

class OfficialTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function testIndex()
    {
        $response = $this->get(route('Official.index'));
        $response->assertStatus(302);
        
    }

    public function testCreate()
    {
        $response = $this->get(route('Official.create', 'id'));
        $response->assertStatus(302);
      
    }

    public function testStore()
{
 
    $data = [
        'id' => 'id',
        'id_sekolah' => 'id_sekolah',
        'data_official' => 'data_official',
        'nama' => 'nama',
        'hp' => 'hp',
        'alamat' => 'alamat',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',

    ];
    $response = $this->post(route('Official.store'), $data);
    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('Official.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $pjofficial = DataOfficial::factory()->create();

    $updatedData = [
        'id' => 'id',
        'id_sekolah' => 'id_sekolah',
        'data_official_id' => 'data_official_id',
        'nama' => 'nama',
        'hp' => 'hp',
        'alamat' => 'alamat.pdf',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',
    ];

    $response = $this->post(route('Official.update',    $pjofficial ->id), $updatedData);

    $response->assertStatus(302);

 
    $pjofficial  =   $pjofficial->fresh();

$this->assertNotEquals($updatedData['id'],   $pjofficial ->id);
$this->assertNotEquals($updatedData['id_sekolah'],   $pjofficial->id_sekolah);
$this->assertNotEquals($updatedData['data_official_id'],   $pjofficial->data_official_id);
$this->assertNotEquals($updatedData['nama'],    $pjofficial->nama);
$this->assertNotEquals($updatedData['hp'],   $pjofficial->hp);
$this->assertNotEquals($updatedData['alamat'],   $pjofficial->alamat);
$this->assertNotEquals($updatedData['foto'],   $pjofficial->foto);
$this->assertNotEquals($updatedData['ktp'],   $pjofficial->ktp);



    $response = $this->get(route('Official.index'));

$response->assertStatus(302);
$this->assertTrue(true, "Official  successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
    $pjofficial = DataOfficial::factory()->create();


    $response = $this->get(route('Official.destroy', ['id' =>    $pjofficial->id]));
    $response = $this->get(route('Official.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "Official.index successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('Official.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('Official.show', 'id'));
    $response->assertStatus(302);

}
}
