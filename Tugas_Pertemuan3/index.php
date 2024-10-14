<?php

# membuat class Animal
class Animal
{
    # property animals
    public $animals = [];

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        echo "Index - Menampilkan seluruh hewan \n";
        # menggunakan foreach untuk menampilkan tiap hewan dalam array
        foreach ($this->animals as $animal) {
            echo "- " . $animal . "\n";
        }
        echo "\n";
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        echo "Store - Menambahkan hewan baru ($data)\n";
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->animals, $data);
        foreach ($this->animals as $animal) {
            echo "- " . $animal . "\n";
        }
        echo "\n";
    }


    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        echo "Update - Mengupdate hewan\n";
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data;
            foreach ($this->animals as $animal) {
                echo "- " . $animal . "\n";
            }
        } else {
            echo "Index tidak ditemukan.\n";
        }
        echo "\n";
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        echo "Delete - Menghapus hewan\n";
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            # Reindex array agar indeks tetap berurutan
            $this->animals = array_values($this->animals);
            foreach ($this->animals as $animal) {
                echo "- " . $animal . "\n";
            }
        } else {
            echo "Index tidak ditemukan.\n";
        }
        echo "\n";
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['Ayam', 'Ikan']);

echo "Index - Menampilkan seluruh hewan";
$animal->index();
echo "\n";

echo "Store - Menambahkan hewan baru";
$animal->store('burung');
echo "\n";

echo "Update - Mengupdate hewan";
$animal->update(0, 'Kucing Anggora');
echo "\n";

echo "Destroy - Menghapus hewan";
$animal->destroy(1);
echo "\n";
?>
