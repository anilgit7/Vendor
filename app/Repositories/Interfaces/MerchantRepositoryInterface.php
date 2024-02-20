<?php
namespace App\Repositories\Interfaces;

Interface MerchantRepositoryInterface{
    public function find_product($id);
    public function get_product();
    public function create_product();
    public function get_category();
    public function product_list();
}