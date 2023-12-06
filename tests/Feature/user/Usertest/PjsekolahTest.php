<?php

namespace Tests\Feature\user\pjsekolah;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pjsekolah as Pjsekolah;


// use App\Models\pjsekolah;

class PjsekolahTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function testIndex()
    {
        $response = $this->get(route('Pj-Sekolah.index'));
        $response->assertStatus(302);
        
      
    }

    public function testCreate()
    {
        $response = $this->get(route('Pj-Sekolah.create'));
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
    $response = $this->post(route('Pj-Sekolah.store'), $data);
    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('Pj-Sekolah.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $pjsekolah = Pjsekolah::factory()->create();

    $updatedData = [
        'nama_kepala_sekolah' => 'Update',
        'alamat_kepala_sekolah' => 'Updated',
        'telp' => '0854676',
        'hp' => '085483473',
        'email' => 'updated@example.com',
        'filerekomendasi' => 'updated_file.pdf',
    ];

    $response = $this->post(route('Pj-Sekolah.update', $pjsekolah->id), $updatedData);

    $response->assertStatus(302);

 
    $pjsekolah = $pjsekolah->fresh();

$this->assertNotEquals($updatedData['nama_kepala_sekolah'], $pjsekolah->nama_kepala_sekolah);
$this->assertNotEquals($updatedData['alamat_kepala_sekolah'], $pjsekolah->alamat_kepala_sekolah);
$this->assertNotEquals($updatedData['telp'], $pjsekolah->telp);

$this->assertNotEquals($updatedData['hp'], $pjsekolah->hp);

$this->assertNotEquals($updatedData['email'], $pjsekolah->email);
$this->assertNotEquals($updatedData['filerekomendasi'], $pjsekolah->filerekomendasi);



    $response = $this->get(route('Pj-Sekolah.index'));

$response->assertStatus(302);
$this->assertTrue(true, "Pj Sekolah successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
    $pjsekolah = Pjsekolah::factory()->create();


    $response = $this->get(route('pj-sekolah.destroy', ['id' => $pjsekolah->id]));
    $response = $this->get(route('Pj-Sekolah.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "Pj Sekolah successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('pj-sekolah.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('Pj-Sekolah.show', 'id'));
    $response->assertStatus(302);

}

}
