<?php
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Login Terlebih Dahulu
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth/login');
        }
    }


    public function tambah_ke_keranjang($id) {
        // Find the item with the specified ID using the "model_barang" model
        $barang = $this->model_barang->find($id);

        // Create an array with the item details
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
        );

        // Insert the item into the cart using CodeIgniter's cart library
        $this->cart->insert($data);

        // Redirect to the dashboard page
        redirect('welcome');
    }

   public function detail_keranjang() {
    // Load the header, sidebar, keranjang view, and footer views
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('keranjang');
    $this->load->view('templates/footer');
}
    public function hapus_keranjang() 
    {
        $this->cart->destroy();
        redirect('welcome');
    }
    public function pembayaran() 
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan() 
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Pesanan anda gagal untuk diproses";
        }
    } // Add this closing brace

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data); 
        $this->load->view('templates/footer');
    }
}
?>
