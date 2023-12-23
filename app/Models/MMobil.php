<?php 

namespace App\Models; 

use CodeIgniter\Model; 

class MMobil extends Model 
{ 
	protected $table = 'mobil'; 
	protected $primaryKey = 'id_mobil'; 
	protected $allowedFields = ['tipe_mobil', 'merk_mobil', 'no_plat','harga_sewa']; 
}