<?php
class Person
{
    //khai báo thuộc tính xe dạng protected
    public $name;
    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this -> name = $name;
    }
    function getname()
    {
        //đúng vì sử dụng trong class con
        return $this -> name;
    }
}
//khởi tạo lớp Person
$person = new Person();
//tác động vào thuộc tính name
$person -> name = 'Hoàng Quốc Nam';
//tác động vào biến name qua hàm setName
$person -> setName('Hoàng Quốc Nam');
echo $person -> getName();