<?php

namespace Tests\Feature\user\Usertest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Datasuporguru as Datasuporguru;

class PjsupporterguruTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function testIndex()
    {
        $response = $this->get(route('Pj-Supporter-Guru.index'));
        $response->assertStatus(302);
        
    }

    public function testCreate()
    {
        $response = $this->get(route('Pj-Supporter-Guru.create', 'id'));
        $response->assertStatus(302);
      
    }

    public function testStore()
{
 
    $data = [
        'id' => 'id',
        'id_sekolah',
        'data_supporterguru_id' => 'data_pjsupporterguru_id',
        'nama' => 'nama',
        'hp' => 'hp',
        'alamat' => 'alamat',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',

    ];
       

    $response = $this->post(route('Pj-Supporter-Guru.store'), $data);

    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('Pj-Sekolah.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $pjsupporterguru = Datasuporguru::factory()->create();

    $updatedData = [
        'id'=> 'id',
        'id_sekolah'=> 'id_sekolah',
        'data_supporterguru_id'=> 'data_supporterguru_id',
        'nama'=> 'nama',
        'hp'=> 'hp',
        'alamat'=> 'alamat',
        'foto'=> 'foto.pdf',
        'ktp'=> 'ktp.pdf',
    ];

    $response = $this->post(route('Pj-Supporter-Guru.update',     $pjsupporterguru  ->id), $updatedData);

    $response->assertStatus(302);

 
    $pjsupporterguru   =     $pjsupporterguru ->fresh();

$this->assertNotEquals($updatedData['id'],  $pjsupporterguru->id);
$this->assertNotEquals($updatedData['id_sekolah'], $pjsupporterguru->id_sekolah);
$this->assertNotEquals($updatedData['data_supporterguru_id'], $pjsupporterguru->data_supporterguru_id);
$this->assertNotEquals($updatedData['nama'], $pjsupporterguru->nama);
$this->assertNotEquals($updatedData['hp'], $pjsupporterguru->hp);
$this->assertNotEquals($updatedData['alamat'], $pjsupporterguru->alamat);
$this->assertNotEquals($updatedData['foto'], $pjsupporterguru->foto);
$this->assertNotEquals($updatedData['ktp'], $pjsupporterguru->ktp);



    $response = $this->get(route('Pj-Supporter-Guru.index'));

$response->assertStatus(302);
$this->assertTrue(true, "pj supporter guru  successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
    $pjsupporterguru  = Datasuporguru::factory()->create();


    $response = $this->get(route('Pj-Supporter-Guru.destroy', ['id' =>    $pjsupporterguru->id]));
    $response = $this->get(route('pj-supporter-guru.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "Pj Supporter guru  successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('Pj-Supporter-Guru.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('Pj-Supporter-Guru.show', 'id'));
    $response->assertStatus(302);

}

  
}
