<?php

    include "../config/database.php";

Class Category
{

    private $cate_name;

    public function setCategoryName($name)
    {  
        $this->cate_name = $name;
    }

    public function getCategoryName()
    {
        return $this->cate_name;
    }

    //addCategory

    public function addCategory()
    {
        $sql = "INSERT INTO categories(cate_name)
                VALUES ( ? )";

        $stmt = DataBase::Connect()->prepare($sql);

        $stmt->execute([
            $this->cate_name
        ]);
    }

    //editCategory

    public function editCategory($id)
    {
        $sql = "UPDATE categories
                SET cate_name = ?
                WHERE id = ? ";
        
        $stmt = DataBase::Connect()->prepare($sql);

        $stmt->execute([
            $this->cate_name,
            $id
        ]);
    }

    //deleteCategory

    public function deleteCategory($id):void
    {
        $sql = "DELETE FROM categories
                WHERE id = ? ";
        
        $stmt = DataBase::Connect()->prepare($sql);

        $stmt->execute([
            $id
        ]);
    }

    //getCategories

    public function getCategories():array
    {
        $sql = "SELECT * FROM categories";
        $stmt = DataBase::Connect()->prepare();

        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>