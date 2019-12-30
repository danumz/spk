<?php /**
 *
 */
class Product extends CI_Controller
{
  function index(){
    $this->db->select('*')->from('tb_sdm_profile a');
    $this->db->join('hasil','a.id=hasil.niks');
    $this->db->order_by('mpe', 'ASC');
    $data['hasil']= $this->db->get()->result();
    $this->template->load('template_admin','admin/product',$data);
  }
  function proses(){
    if (isset($_POST['submit'])) {
      $this->load->model('Tampung_bobot', 'tb');
      $data_bobot = $this->tb->tampung();
      $no = 1;
      foreach ($this->ambil_gis() as $k) {
        $bayes['pengalaman'][] = $k->pengalaman_id;
        $bayes['pendidikan'][] = $k->pendidikan_id;
        $bayes['peminatan'][] = $k->peminatan_id;
        $bayes['lahir'][] = $k->tgl_lahir;
        $bayes['kawin'][] = $k->status_perkawinan;
        $tampung_id[] =$k->id;
        $no++;
      }
      for ($i=0; $i < count($bayes['pengalaman']); $i++) {
        $p_bayes['pengalaman'][$i] = $bayes['pengalaman'][$i] * $data_bobot[1];
        $p_bayes['pendidikan'][$i] = $bayes['pendidikan'][$i] * $data_bobot[2];
        $p_bayes['peminatan'][$i] = $bayes['peminatan'][$i] * $data_bobot[3];
        $p_bayes['lahir'][$i] = $bayes['lahir'][$i] * $data_bobot[4];
        $p_bayes['kawin'][$i] = $bayes['kawin'][$i] * $data_bobot[5];
      }
      for ($j=0; $j < count($bayes['pengalaman']) ; $j++) {
        $bayes_pendidikan[$j] = $p_bayes['pengalaman'][$j]  + $p_bayes['pendidikan'][$j] + $p_bayes['peminatan'][$j] + $p_bayes['lahir'][$j] + $p_bayes['kawin'][$j];
      }

      for ($k=0; $k < count($bayes['pengalaman']) ; $k++) {
        $mpe_pendidikan[$k] = pow($bayes['pengalaman'][$k],$data_bobot[1]) + pow($bayes['pendidikan'][$k],$data_bobot[2]) + pow($bayes['peminatan'][$k],$data_bobot[3]) + pow($bayes['lahir'][$k],$data_bobot[4]) + pow($bayes['kawin'][$k],$data_bobot[5]);
      }
      for ($l=0; $l < count($tampung_id); $l++) {
        $data[] = [
          'niks' => round($tampung_id[$l], 3),
          'bayes' => round($bayes_pendidikan[$l],3),
          'mpe' => round($mpe_pendidikan[$l],3)
        ];
      }
      for ($q=0; $q < count($data) ; $q++) {
        $this->db->insert('hasil', $data[$q]);
      }
      redirect('Admin/Product');

    }
  }
  function ambil_gis(){
    $this->db->select('*')->from('tb_sdm_profile');
    $data = $this->db->get()->result();
    return $data;
  }

}
