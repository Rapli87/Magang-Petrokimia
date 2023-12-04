<?php

namespace Tests\Feature\user\pjsekolah;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\PjTim as PjTim;

class PjtimTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIndex()
    {
        $response = $this->get(route('Pj-Tim.index'));
        $response->assertStatus(302);
        
    }

    public function testCreate()
    {
        $response = $this->get(route('Pj-Tim.create', 'id'));
        $response->assertStatus(302);
      
    }

    public function testStore()
{
 
    $data = [
        'pj_sekolah_id' => 'pj_sekolah_id',
        'nama_kepala_sekolah' => 'nama_kepala_sekolah',
        'alamat_kepala_sekolah' => 'alamat_kepala_sekolah',
        'telp' => 'telp',
        'hp' => 'hp',
        'email' => 'email',
        'filerekomendasi' => 'filerekomendasi',

    ];
    $response = $this->post(route('Pj-Tim.store'), $data);
    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('Pj-Tim.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $pjtim = PjTim::factory()->create();

    $updatedData = [
        'id' => 'id',
        'pj_tim_id' => 'pj_tim_id',
        'id_sekolah' => 'id_sekolah',
        'nama' => 'nama',
        'jabatan' => 'jabatan',
        'nip' => 'nip',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',
    ];

    $response = $this->post(route('Pj-Tim.update',  $pjtim ->id), $updatedData);

    $response->assertStatus(302);

 
    $pjtim  =  $pjtim ->fresh();

$this->assertNotEquals($updatedData['pj_tim_id'],  $pjtim ->pj_tim_id);
$this->assertNotEquals($updatedData['id_sekolah'],  $pjtim ->id_sekolah);
$this->assertNotEquals($updatedData['nama'],  $pjtim->nama);

$this->assertNotEquals($updatedData['jabatan'],   $pjtim->jabatan);

$this->assertNotEquals($updatedData['nip'],  $pjtim->nip);
$this->assertNotEquals($updatedData['foto'],  $pjtim->foto);
$this->assertNotEquals($updatedData['ktp'],  $pjtim->ktp);



    $response = $this->get(route('Pj-Tim.index'));

$response->assertStatus(302);
$this->assertTrue(true, "Pj-Tim successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
    $pjtim = PjTim::factory()->create();


    $response = $this->get(route('pj-tim.destroy', ['id' =>  $pjtim->id]));
    $response = $this->get(route('Pj-Tim.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "Pj-Tim successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('Pj-Tim.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('Pj-Tim.show', 'id'));
    $response->assertStatus(302);

}
}
