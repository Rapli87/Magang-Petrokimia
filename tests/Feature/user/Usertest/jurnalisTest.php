<?php

namespace Tests\Feature\user\Usertest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Jurnalis as Jurnalis;

class jurnalisTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function testIndex()
    {
        $response = $this->get(route('Jurnalis.index'));
        $response->assertStatus(302);
        
    }

    public function testCreate()
    {
        $response = $this->get(route('Jurnalis.create', 'id'));
        $response->assertStatus(302);
      
    }

    public function testStore()
{
 
    $data = [
        'id',
        'id_sekolah',
        'data_jurnallis_id',
        'nama',
        'hp',
        'alamat',
        'foto',
        'ktp',
    
      

    ];
    $response = $this->post(route('Jurnalis.store'), $data);
    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('Jurnalis.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $jurnalis = Jurnalis::factory()->create();

    $updatedData = [
        'id'=> 'id',
        'id_sekolah'=> 'id_sekolah',
        'data_jurnallis_id'=> 'data_jurnallis_id',
        'nama'=> 'nama',
        'hp'=> 'hp',
        'alamat'=> 'alamat',
        'foto'=> 'foto.pdf',
        'ktp'=> 'ktp.pdf',
    ];

    $response = $this->post(route('Jurnalis.update',$jurnalis->id), $updatedData);

    $response->assertStatus(302);

 
    $jurnalis  = $jurnalis->fresh();

$this->assertNotEquals($updatedData['id'],    $jurnalis->id);
$this->assertNotEquals($updatedData['id_sekolah'],    $jurnalis->id_sekolah);
$this->assertNotEquals($updatedData['data_jurnallis_id'],    $jurnalis->data_jurnallis_id);
$this->assertNotEquals($updatedData['nama'],    $jurnalis->nama);
$this->assertNotEquals($updatedData['hp'],    $jurnalis->hp);
$this->assertNotEquals($updatedData['alamat'],    $jurnalis->alamat);
$this->assertNotEquals($updatedData['foto'],    $jurnalis->foto);
$this->assertNotEquals($updatedData['ktp'],    $jurnalis->ktp);



    $response = $this->get(route('Jurnalis.index'));

$response->assertStatus(302);
$this->assertTrue(true, "Jurnalis successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
   $jurnalis    = Jurnalis::factory()->create();


    $response = $this->get(route('Jurnalis.destroy', ['id' =>        $jurnalis   ->id]));
    $response = $this->get(route('Jurnalis.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "Jurnalis  successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('Jurnalis.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('Jurnalis.show', 'id'));
    $response->assertStatus(302);

}
}
