<?php
/**
 *
 */
class Tampung_bobot extends CI_Model
{
  function tampung(){
    $data = [
      '1' => $this->input->post('pengalaman'),
      '2' => $this->input->post('pendidikan'),
      '3' => $this->input->post('peminatan'),
      '4' => $this->input->post('lahir'),
      '5' => $this->input->post('kawin'),
    ];
    $jumlah = array_sum($data);
    $no = 1;
    foreach ($data as $k) {
      $tampung[$no] = ($data[$no] / $jumlah) * 10;
    $no++;
    }
    return $tampung;
  }
}
