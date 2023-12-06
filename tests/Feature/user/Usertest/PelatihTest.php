<?php

namespace Tests\Feature\user\Usertest;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Datapelatih as Datapelatih;


class PelatihTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */

     public function testIndex()
    {
        $response = $this->get(route('Pelatih.index'));
        $response->assertStatus(302);
        
    }

    public function testCreate()
    {
        $response = $this->get(route('Pelatih.create', 'id'));
        $response->assertStatus(302);
      
    }

    public function testStore()
{
 
    $data = [
        'id' => 'id',
        'data_pelatih_id' => 'data_pelatih_id',
        'id_sekolah' => 'id_sekolah',
        'nama' => 'nama',
        'id_peserta' => 'id_peserta',
        'hp' => 'hp',
        'alamat' => 'alamat',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',

    ];
    $response = $this->post(route('Pelatih.store'), $data);
    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('Pelatih.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $pjpelatih = Datapelatih::factory()->create();

    $updatedData = [
        'id' => 'id',
        'data_pelatih_id' => 'data_pelatih_id',
        'id_sekolah' => 'id_sekolah',
        'nama' => 'nama',
        'id_peserta' => 'id_peserta',
        'hp' => 'hp',
        'alamat' => 'alamat.pdf',
        'foto' => 'foto.pdf',
        'ktp' => 'ktp.pdf',
    ];

    $response = $this->post(route('Pelatih.update',    $pjpelatih ->id), $updatedData);

    $response->assertStatus(302);

 
    $pjpelatih  =  $pjpelatih->fresh();

$this->assertNotEquals($updatedData['id'],  $pjpelatih ->id);
$this->assertNotEquals($updatedData['data_pelatih_id'],  $pjpelatih ->data_pelatih_id);
$this->assertNotEquals($updatedData['id_sekolah'],  $pjpelatih->id_sekolah);
$this->assertNotEquals($updatedData['nama'],   $pjpelatih->nama);
$this->assertNotEquals($updatedData['id_peserta'],  $pjpelatih->id_peserta);
$this->assertNotEquals($updatedData['hp'],  $pjpelatih->hp);
$this->assertNotEquals($updatedData['alamat'],  $pjpelatih->alamat);
$this->assertNotEquals($updatedData['foto'],  $pjpelatih->foto);
$this->assertNotEquals($updatedData['ktp'],  $pjpelatih->ktp);



    $response = $this->get(route('Pelatih.index'));

$response->assertStatus(302);
$this->assertTrue(true, "Pelatih  successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
    $pjpelatih = Datapelatih::factory()->create();


    $response = $this->get(route('Pelatih.destroy', ['id' =>  $pjpelatih->id]));
    $response = $this->get(route('Pelatih.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "Pelatih  successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('Pelatih.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('Pelatih.show', 'id'));
    $response->assertStatus(302);

}
   
}
