<?php
class kategori extends CI_Controller {
    public function elektronik() {
        // Memuat model model_kategori
        $this->load->model('model_kategori');

        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_pria()
    {
    // Memuat model model_kategori
    $this->load->model('model_kategori');

    $data['pakaian_pria'] = $this->model_kategori->data_pakaian_pria()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_pria', $data);
    $this->load->view('templates/footer');
}
public function pakaian_wanita()
{
    // Memuat model model_kategori
    $this->load->model('model_kategori');

    $data['pakaian_wanita'] = $this->model_kategori->data_pakaian_wanita()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_wanita', $data);
    $this->load->view('templates/footer');
}

public function pakaian_anak_anak()
{
    // Memuat model model_kategori
    $this->load->model('model_kategori');

    $data['pakaian_anak_anak'] = $this->model_kategori->data_pakaian_anak_anak()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('pakaian_anak_anak', $data);
    $this->load->view('templates/footer');
}


public function peralatan_olahraga()
{
    $this->load->model('model_kategori');
    $data['peralatan_olahraga'] = $this->model_kategori->data_peralatan_olahraga()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('peralatan_olahraga', $data);
    $this->load->view('templates/footer');
}
public function about_us()
{
    $this->load->model('model_kategori');
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('about_us');
    $this->load->view('templates/footer');
}

}