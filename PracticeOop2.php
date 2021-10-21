<?php 
    trait Active
    {
        public function defindYourSelf()
        {
            return get_class($this);
        }
    }

    abstract class Country
    {
        use Active;

        protected $sologan;

        abstract public function sayHello();
    }

    interface Boss
    {
        public function checkValidSlogan();
    }

    class EnglandCountry extends Country implements Boss
    {
        public function sayHello()
        {
            echo "Hello";
        }

        public function checkValidSlogan()
        {
            $result1 = is_integer(strpos(strtolower($this->sologan), 'england'));
            $result2 = is_integer(strpos(strtolower($this->sologan), 'english'));
            return $result1 || $result2;
        }

        public function setSlogan($contents)
        {
            $this->sologan = $contents;
        }
    }

    class VietNamCountry extends Country implements Boss
    {
        public function sayHello()
        {
            echo "Xin chào";
        }

        public function checkValidSlogan()
        {
            $result1 = is_integer(strpos(strtolower($this->sologan), 'vietnam'));
            $result2 = is_integer(strpos(strtolower($this->sologan), 'hust'));
            return $result1 && $result2;
        }

        public function setSlogan($contents)
        {
            $this->sologan = $contents;
        }
    }

    $englandCountry = new EnglandCountry();
    $vietnamCountry = new VietnamCountry();

    $englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');

    $vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

    $englandCountry->sayHello(); // Hello
    echo "<br>";
    $vietnamCountry->sayHello(); // Xin chao

    echo "<br>";

    var_dump($englandCountry->checkValidSlogan()); // true
    echo "<br>";
    var_dump($vietnamCountry->checkValidSlogan()); // false

    echo "<br>";

    echo 'I am ' . $englandCountry->defindYourSelf();
    echo "<br>";
    echo 'I am ' . $vietnamCountry->defindYourSelf();
?>