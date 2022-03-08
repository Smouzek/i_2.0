<?php
//работа с БД
include('./include/dbConnect.php');
class RecordsWork
{
    public function checkDBRecord($table_name = "", $id = 0) {
        global $connection;
        $id += 0;
        $access_tables = array('category','product');
        $field_name = "{$table_name}_id";
        if (in_array($table_name, $access_tables) && $id > 0) {
            $query = "
                SELECT {$field_name}
                FROM {$table_name}
                WHERE {$field_name} = :id
            ";
            $sth = $connection->prepare($query);
            $sth->execute(array('id' => $id));
            $res = $sth->fetchAll();
            if ($res[0][$field_name] == $id) {
                $result = 1;
            } else {
                $result = 404;
            }
        } else {
            $result = 404;
        }
        return $result;
    }

    public function categoryItems($category_id = 0) {
        global $connection;
        $query = "
            SELECT COUNT(*) as number
            FROM product_categories
            WHERE category_id = :category_id;
        ";
        $sth = $connection->prepare($query);
        $sth->execute(array('category_id' => $category_id));
        $result = $sth->fetchAll();
        return $result;
    }
    /**
     * Функция для вобора категорий товаров и числа товаров в каждой категории
     * @return Array
     */
    public function selectCategory()
    {
        global $connection;
        try {
            $query = "
                SELECT c.category_id, c.name, COUNT(*) as number
                FROM category c
                JOIN product_categories pc ON pc.category_id = c.category_id
                JOIN product p ON pc.product_id = p.product_id AND p.status_id = 1
                GROUP BY c.name
                ORDER BY number DESC;
            ";

            $sth = $connection->prepare($query);
            $sth->execute();
            $result = $sth->fetchAll();
        } catch (PDOException $e) {
            $result = $e->getMessage();
        }
        return $result;
    }

    /**
     * Выбор товаров в категории
     * @param Integer $category_id - id категории
     * @return Array|Integer
     */
    public function getProductList($category_id = 0)
    {
        global $connection;
        $category_id += 0;
        $check = $this->checkDBRecord('category', $category_id);
        if ($check == 1) {
            try {
                $query = "
                    SELECT c.name category_name, p.product_id, p.name product_name,
                            pic.path_to_file picture_path, pic.description alt
                    FROM product p
                    JOIN product_categories pc ON p.product_id = pc.product_id
                    JOIN category c ON c.category_id = pc.category_id
                    LEFT JOIN product_pictures pp ON pp.product_id = p.product_id AND pp.is_preview = 1
                    LEFT JOIN picture pic ON pic.picture_id = pp.picture_id
                    WHERE pc.category_id = :category_id;
                ";
                $sth = $connection->prepare($query);
                $sth->execute(array('category_id' => $category_id));
                $result = $sth->fetchAll();
            } catch (PDOException $e) {
                $result = $e->getMessage();
            }
        } else {
            $result = $check;
        }
        return $result;
    }

    /**
     * Выбор информации по товару
     * @param Integer $product_id - id товара
     * @return Array|Integer
     */
    public function getProductInfo($product_id = 0)
    {
        global $connection;
        $product_id += 0;
        $data = array('product_id' => $product_id);
        $check = $this->checkDBRecord('product', $product_id);
        if ($check == 1) {
            try {
                //
                $query = "
                    SELECT p.name product_name,
                            pr.value price,
                            ROUND(pr.value * (100 - d.value) / 100, 2) discount_price,
                            IF(pc.id IS NOT NULL, ROUND(pr.value * (100 - dd.value) / 100, 2) , NULL) promo_price,
                            p.description
                    FROM product p
                    JOIN price pr ON pr.price_id = p.price_id
                    JOIN discount d ON d.discount_id = p.discount_id
                    LEFT JOIN promocod pc ON p.promocod_id = pc.id
                    LEFT JOIN discount dd ON dd.discount_id = pc.discount_id
                    WHERE p.product_id = :product_id;
                ";
                $sth = $connection->prepare($query);
                $sth->execute($data);
                $result = $sth->fetchAll();

                if (is_array($result) && !empty($result)) {
                    //Категории для товара
                    $query = "
                        SELECT c.category_id, c.name
                        FROM product_categories pc
                        JOIN category c ON pc.category_id = c.category_id
                        WHERE pc.product_id = :product_id;
                    ";
                    $sth = $connection->prepare($query);
                    $sth->execute($data);
                    $caregories = $sth->fetchAll();
                    if (is_array($caregories) && !empty($caregories)) {
                        $result[0]['categories'] = $caregories;
                    }
                    //Картинки товара
                    $query = "
                        SELECT p.path_to_file, p.description alt
                        FROM product_pictures pp
                        JOIN picture p ON pp.picture_id = p.picture_id
                        WHERE pp.product_id = :product_id;
                    ";
                    $sth = $connection->prepare($query);
                    $sth->execute($data);
                    $pictures = $sth->fetchAll();
                    if (is_array($pictures) && !empty($pictures)) {
                        $result[0]['pictures'] = $pictures;
                    }
                } else {
                    $result = array();
                }
            } catch (PDOException $e) {
                $result = $e->getMessage();
            }
        } else {
            $result = 404;
        }
        return $result;
    }
}
