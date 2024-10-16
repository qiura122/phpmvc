<?php

class About extends Controller {
    public function index($nama = "KomangEmo", $pekerjaan = 'Mahasiswa')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('about/index', $data);
    }
    public function page()
    {
        $this->view('about/page');
    }
}

?>