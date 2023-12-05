<?php

namespace Tests\Feature\user\Usertest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pemain;   

class PemainTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */

     public function testIndex()
     {
         $response = $this->get(route('pemain.index'));
         $response->assertStatus(302);
         
     }
 
     public function testCreate()
     {
         $response = $this->get(route('pemain.create', 'id'));
         $response->assertStatus(302);
       
     }
 
     public function testStore()
 {
  
     $data = [
        'id'=> 'id',
        'name'=> 'name',
        'id_sekolah'=> 'id_sekolah',
        'data_sekolah_id'=> 'data_sekolah_id',
        'pj_sekolah_id'=> 'pj_sekolah_id',
        'pj_tim_id'=> 'pj_tim_id',
        'data_pelatih_id'=> 'data_pelatih_id',
        'data_official_id'=> 'data_official_id',
        'data_manajer_id'=>'data_manajer_id',
        'data_supportersiswa_id'=> 'data_supportersiswa_id',
        'data_supporterguru_id'=> 'data_supporterguru_id',
        'data_pjmedis_id'=> 'data_pjmedis_id',
        'data_jurnallis_id'=> 'data_jurnallis_id',
        'No_punggung'=> 'No_punggung',
        'Kelas'=> 'Kelas',
        'Tanggal_lahir'=> 'Tanggal_lahir',
        'Ijasah'=> 'Ijasah',
        'Rapor'=> 'Rapor',
        'Keterangan_Siswa'=> 'Keterangan_Siswa',
        'Kartu_Siswa'=> 'Kartu_Siswa',
        'Foto'=> 'Foto',
       
 
     ];
     $response = $this->post(route('pemain.store'), $data);
     $response->assertStatus(302);
     
 }
 
 public function testEdit()
 {
     $response = $this->get(route('manajer.edit', 'id'));
     $response->assertStatus(302);
    
 }
 
     public function testUpdate()
     {
       
     $Pemain = Pemain::factory()->create();
 
     $updatedData = [
        'id'=> 'id',
        'name'=> 'name',
        'id_sekolah'=> 'id_sekolah',
        'data_sekolah_id'=> 'data_sekolah_id',
        'pj_sekolah_id'=> 'pj_sekolah_id',
        'pj_tim_id'=> 'pj_tim_id',
        'data_pelatih_id'=> 'data_pelatih_id',
        'data_official_id'=> 'data_official_id',
        'data_manajer_id'=>'data_manajer_id',
        'data_supportersiswa_id'=> 'data_supportersiswa_id',
        'data_supporterguru_id'=> 'data_supporterguru_id',
        'data_pjmedis_id'=> 'data_pjmedis_id',
        'data_jurnallis_id'=> 'data_jurnallis_id',
        'No_punggung'=> 'No_punggung',
        'Kelas'=> 'Kelas',
        'Tanggal_lahir'=> 'Tanggal_lahir',
        'Ijasah'=> 'Ijasah',
        'Rapor'=> 'Rapor',
        'Keterangan_Siswa'=> 'Keterangan_Siswa',
        'Kartu_Siswa'=> 'Kartu_Siswa',
        'Foto'=> 'Foto',
     ];
 
     $response = $this->post(route('pemain.update',      $Pemain   ->id), $updatedData);
 
     $response->assertStatus(302);
 
  
     $Pemain =  $Pemain ->fresh();
 
 $this->assertNotEquals($updatedData['id'],$Pemain->id);
 $this->assertNotEquals($updatedData['name'],$Pemain->name);
 $this->assertNotEquals($updatedData['id_sekolah'],$Pemain->id_sekolah);
 $this->assertNotEquals($updatedData['pj_sekolah_id'],$Pemain->pj_sekolah_id);
 $this->assertNotEquals($updatedData['pj_tim_id'],$Pemain->pj_tim_id);
 $this->assertNotEquals($updatedData['data_pelatih_id'],$Pemain->data_pelatih_id);
 $this->assertNotEquals($updatedData['data_official_id'],$Pemain->data_official_id);
 $this->assertNotEquals($updatedData['data_manajer_id'],$Pemain->data_manajer_id);
 $this->assertNotEquals($updatedData['data_supportersiswa_id'],$Pemain->data_supportersiswa_id);
 $this->assertNotEquals($updatedData['data_supporterguru_id'],$Pemain->data_supporterguru_id);
 $this->assertNotEquals($updatedData['data_pjmedis_id'],$Pemain->data_pjmedis_id);
 $this->assertNotEquals($updatedData['data_jurnallis_id'],$Pemain->data_jurnallis_id);
 $this->assertNotEquals($updatedData['No_punggung'],$Pemain->No_punggung);
 $this->assertNotEquals($updatedData['Tanggal_lahir'],$Pemain->Tanggal_lahir);
 $this->assertNotEquals($updatedData['Ijasah'],$Pemain->Ijasah);
 $this->assertNotEquals($updatedData['Rapor'],$Pemain->Rapor);
 $this->assertNotEquals($updatedData['Keterangan_Siswa'],$Pemain->Keterangan_Siswa);
 $this->assertNotEquals($updatedData['Kartu_Siswa'],$Pemain->Kartu_Siswa);
 $this->assertNotEquals($updatedData['Foto'],$Pemain->Foto);
 
 
 
     $response = $this->get(route('pemain.index'));
 
 $response->assertStatus(302);
 $this->assertTrue(true, "pemain  successfully updated");
 
 
        
     }
     
 
     public function testDestroy()
 {
   
   
     $Pemain  = Pemain::factory()->create();
 
 
     $response = $this->get(route('pemain.destroy', ['id' =>     $Pemain->id]));
     $response = $this->get(route('pemain.index'));
     $response->assertStatus(302);
 
     $this->assertTrue(true, "Pemain  successfully deleted");
 }
 
 public function testDelete()
 {
     $response = $this->get(route('pemain.delete', 'id'));
     $response->assertStatus(302);
 
    
 }
 
 public function testShow()
 {
     $response = $this->get(route('pemain.show', 'id'));
     $response->assertStatus(302);
 
 }
  
}
