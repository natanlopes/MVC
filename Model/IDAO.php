<?php
interface IDAO{
      public function insert($value);
      public function update($value);
      public function delete($value);
      public function getById($id);
      public function getAll();
}
?>
