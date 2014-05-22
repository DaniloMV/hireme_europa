<?php namespace HireMe\Repositories;

use \HireMe\Entities\Category;

class CategoryRepo extends BaseRepo {

    public function getModel()
    {
        return new Category;
    }

    public function getList()
    {
        $categories = Category::get();

        $list = array();

        foreach ($categories as $category)
        {
            $list[$category->id] = $category->name;
        }

        return $list;
    }

}