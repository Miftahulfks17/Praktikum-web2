<?php
    class Mahasiswa {
        public $nama;
        public $rombel;
        public $jurusan;

        public function __construct($nama, $rombel, $jurusan) {
            $this->nama = $nama;
            $this->rombel = $rombel;
            $this->jurusan = $jurusan;
        }
    }

    
    $mahasiswa1 = new Mahasiswa("Miftahul", "TI08", "Teknik Informatika");

    echo "Nama : " . $mahasiswa1->nama . "<br>";
    echo "Rombel : " . $mahasiswa1->rombel . "<br>";
    echo "Jurusan : " . $mahasiswa1->jurusan . "<br>";
?>