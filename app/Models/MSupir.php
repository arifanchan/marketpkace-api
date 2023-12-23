<?php 

namespace App\Models; 

use CodeIgniter\Model; 

class MSupir extends Model 
{ 
	protected $table = 'supir'; 
	protected $primaryKey = 'id_supir'; 
	protected $allowedFields = ['nama', 'no_ktp', 'alamat','pengalaman']; 
}