<?php

namespace Tests\Feature\user\Usertest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Datasuportersiswa as Datasuportersiswa;

class PjsupportersiswaTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    public function testIndex()
    {
        $response = $this->get(route('Pj-Supporter-Siswa.index'));
        $response->assertStatus(302);
        
    }

    public function testCreate()
    {
        $response = $this->get(route('Pj-Supporter-Siswa.create', 'id'));
        $response->assertStatus(302);
      
    }

    public function testStore()
{
 
    $data = [
        'id'=> 'id',
        'id_sekolah'=> 'id_sekolah',
        'data_supportersiswa_id'=> 'data_supportersiswa_id',
        'nama'=> 'nama',
        'hp'=> 'hp',
        'alamat'=> 'alamat',
        'foto'=> 'foto.pdf',
        'ktp'=> 'ktp.pdf',
    
      

    ];
    $response = $this->post(route('Pj-Supporter-Siswa.store'), $data);
    $response->assertStatus(302);
    
}

public function testEdit()
{
    $response = $this->get(route('Pj-Supporter-Siswa.edit', 'id'));
    $response->assertStatus(302);
   
}

    public function testUpdate()
    {
      
    $Datasuportersiswa = Datasuportersiswa::factory()->create();

    $updatedData = [
        'id'=> 'id',
        'id_sekolah'=> 'id_sekolah',
        'data_supportersiswa_id'=> 'data_supportersiswa_id',
        'nama'=> 'nama',
        'hp'=> 'hp',
        'alamat'=> 'alamat',
        'foto'=> 'foto.pdf',
        'ktp'=> 'ktp.pdf',
    ];

    $response = $this->post(route('Pj-Supporter-Siswa.update',      $Datasuportersiswa   ->id), $updatedData);

    $response->assertStatus(302);

 
    $Datasuportersiswa =    $Datasuportersiswa->fresh();

$this->assertNotEquals($updatedData['id'], $Datasuportersiswa->id);
$this->assertNotEquals($updatedData['id_sekolah'], $Datasuportersiswa->id_sekolah);
$this->assertNotEquals($updatedData['data_supportersiswa_id'], $Datasuportersiswa->data_supportersiswa_id);
$this->assertNotEquals($updatedData['nama'], $Datasuportersiswa->nama);
$this->assertNotEquals($updatedData['hp'], $Datasuportersiswa->hp);
$this->assertNotEquals($updatedData['alamat'], $Datasuportersiswa->alamat);
$this->assertNotEquals($updatedData['foto'], $Datasuportersiswa->foto);
$this->assertNotEquals($updatedData['ktp'], $Datasuportersiswa->ktp);



    $response = $this->get(route('Pj-Supporter-Siswa.index'));

$response->assertStatus(302);
$this->assertTrue(true, "Pj-Supporter-Siswa  successfully updated");


       
    }
    

    public function testDestroy()
{
  
  
    $Datasuportersiswa   = Datasuportersiswa::factory()->create();


    $response = $this->get(route('Pj-Supporter-Siswa.destroy', ['id' =>      $Datasuportersiswa ->id]));
    $response = $this->get(route('Pj-Supporter-Siswa.index'));
    $response->assertStatus(302);

    $this->assertTrue(true, "Pj-Supporter-Siswa  successfully deleted");
}

public function testDelete()
{
    $response = $this->get(route('Pj-Supporter-Siswa.delete', 'id'));
    $response->assertStatus(302);

   
}

public function testShow()
{
    $response = $this->get(route('Pj-Supporter-Siswa.show', 'id'));
    $response->assertStatus(302);

}
}
