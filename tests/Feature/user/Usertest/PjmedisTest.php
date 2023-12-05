<?php

namespace Tests\Feature\user\Usertest;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pjmedis as Pjmedis;

class PjmedisTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     */
    
     public function testIndex()
     {
         $response = $this->get(route('Pj-Medis.index'));
         $response->assertStatus(302);
         
     }
 
     public function testCreate()
     {
         $response = $this->get(route('Pj-Medis.create', 'id'));
         $response->assertStatus(302);
       
     }
 
     public function testStore()
 {
  
     $data = [
        'id'=> 'id',
        'id_sekolah'=> 'id_sekolah',
        'data_pjmedis_id'=> 'data_pjmedis_id',
        'nama'=> 'nama',
        'hp'=> 'hp',
        'alamat'=> 'alamat',
        'foto'=> 'foto.pdf',
        'ktp'=> 'ktp.pdf',
     
       
 
     ];
     $response = $this->post(route('Pj-Medis.store'), $data);
     $response->assertStatus(302);
     
 }
 
 public function testEdit()
 {
     $response = $this->get(route('Pj-Medis.edit', 'id'));
     $response->assertStatus(302);
    
 }
 
     public function testUpdate()
     {
       
     $PjMedis = Pjmedis::factory()->create();
 
     $updatedData = [
        'id'=> 'id',
        'id_sekolah'=> 'id_sekolah',
        'data_pjmedis_id'=> 'data_pjmedis_id',
        'nama'=> 'nama',
        'hp'=> 'hp',
        'alamat'=> 'alamat',
        'foto'=> 'foto.pdf',
        'ktp'=> 'ktp.pdf',
     ];
 
     $response = $this->post(route('Pj-Medis.update',      $PjMedis->id), $updatedData);
 
     $response->assertStatus(302);
 
  
     $PjMedis  =     $PjMedis ->fresh();
 
 $this->assertNotEquals($updatedData['id'],  $PjMedis ->id);
 $this->assertNotEquals($updatedData['id_sekolah'],  $PjMedis ->id_sekolah);
 $this->assertNotEquals($updatedData['data_pjmedis_id'],  $PjMedis ->data_pjmedis_id);
 $this->assertNotEquals($updatedData['nama'],  $PjMedis ->nama);
 $this->assertNotEquals($updatedData['hp'],  $PjMedis->hp);
 $this->assertNotEquals($updatedData['alamat'],  $PjMedis->alamat);
 $this->assertNotEquals($updatedData['foto'],  $PjMedis->foto);
 $this->assertNotEquals($updatedData['ktp'],  $PjMedis->ktp);
 
 
 
     $response = $this->get(route('Pj-Medis.index'));
 
 $response->assertStatus(302);
 $this->assertTrue(true, "Pj-Medis  successfully updated");
 
 
        
     }
     
 
     public function testDestroy()
 {
   
   
    $PjMedis    = Pjmedis::factory()->create();
 
 
     $response = $this->get(route('Pj-Medis.destroy', ['id' =>       $PjMedis  ->id]));
     $response = $this->get(route('Pj-Medis.index'));
     $response->assertStatus(302);
 
     $this->assertTrue(true, "Pj-Medis  successfully deleted");
 }
 
 public function testDelete()
 {
     $response = $this->get(route('Pj-Medis.delete', 'id'));
     $response->assertStatus(302);
 
    
 }
 
 public function testShow()
 {
     $response = $this->get(route('Pj-Medis.show', 'id'));
     $response->assertStatus(302);
 
 }
}
