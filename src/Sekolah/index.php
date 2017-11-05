<?php
/**
 * File kerja - Utama
 *
 * @since version 1.0.0
 * @author ayus irfang filaras <ayus.sahabat@gmail.com>
 */
namespace SRC;

// Memanggil fungsi
require __DIR__.'/library/funcX.php';

class Utama
{
	public function __construct()
	{
		setContentview('welcome');
	}
}
