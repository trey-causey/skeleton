<?php namespace Pds\Skeleton\data_structures;

class BigOIndex {
    /*
    * @var array $intArr
    */
    public static function log1($intArr = []) {
        //O(1), runs in constant time
        print_r("log1-output: ");
        print_r($intArr[0]);
        print("\n");
    }
    /*
    * @var array $intArr
    */
    public static function log2($intArr = []) {
        //O(n)
        print_r("log2-output: ");
        foreach($intArr as $int) {
            print_r($int);
        }
        print("\n");
    }
}

BigOIndex::log1([2,4,6]);
BigOIndex::log2([2,4,6]);





