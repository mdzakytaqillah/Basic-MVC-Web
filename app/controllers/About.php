<?php
class About extends Controller {
    public function index($nama='Fahrul', $kelas='IM122'){
        $data['nama'] = $nama;
        $data['kelas'] = $kelas;
        $this->view('about/index', $data);
    }

    public function page(){
        $this->view('about/page');
    }
}