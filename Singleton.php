<?php
final class UserFactory
{
    /**
     * Call this method to get singleton
     *
     * @return UserFactory
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new UserFactory();
        }
        return $inst;
    }

    /**
     * Private ctor so nobody else can instance it
     *
     */
    private function __construct()
    {

    }
}

$fact = UserFactory::Instance();
$fact2 = UserFactory::Instance();

$fact = new UserFactory(); //error
?>
