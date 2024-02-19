<?php
namespace App\Repositories\Interfaces;

Interface AdminRepositoryInterface{
    public function new_merchant();
    public function verified_merchant();
    public function find_account($id);
    public function customer_list();
    public function create_category();
    public function get_category();
    public function find_category($id);
    public function category_exist($category_name);
    public function get_category_product($category);
    public function category_product_exist($category);
}