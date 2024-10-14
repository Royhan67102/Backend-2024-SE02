<?php

# membuat class Person
class Person
{
    # membuat property (variable)
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }
}

$ryhn = new Person('Royhan Audy Akbar', 'Bogor', 'Teknik Informatika');
$ahmad = new Person('Ahmad Fakhri', 'Bandung', 'Sistem Informasi');