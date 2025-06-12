<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductCategoryModel extends Model
{
	protected $table = 'product_category'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama_kategori','jumlah_produk','total_stok','foto','updated_at'
	];  
}