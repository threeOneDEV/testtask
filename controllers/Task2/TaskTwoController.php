<?php
namespace controllers\Task2;

use models\Availability;
use models\Category;
use models\Product;
use models\Stock;

class TaskTwoController{

    public function index(){
        $availabilityModel = new Availability;
        $availabilities = $availabilityModel->findAll();

        $productModel = new Product;
        $products = $productModel->findAll();

        $stockModel = new Stock;
        $stocks = $stockModel->findAll();

        $categoryModel = new Category;
        $categories = $categoryModel->findAll();

        foreach($products as $product){
            $i = 0;
            foreach($availabilities as $availability){
                if($availability['product_id'] === $product['id']){
                    $i++;
                }
            }

            if($i == 0){
                $productModel->delete($product['id']);
            }
        }

        foreach($stocks as $stock){
            $i = 0;
            foreach($availabilities as $availability){
                if($availability['stock_id'] === $stock['id']){
                    $i++;
                }
            }

            if($i == 0){
                $stockModel->delete($stock['id']);
            }
        }

        foreach($categories as $category){
            $i = 0;
            foreach($products as $product){
                if($product['category_id'] === $category['id']){
                    $i++;
                }
            }

            if($i == 0){
                $categoryModel->delete($category['id']);
            }
        }

        include('app/views/task2/index.php');
    }
    
}