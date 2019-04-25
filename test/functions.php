<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-03-17
 * Time: 13:15
 */

require '../functions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testCalcLengthSuccess()
    {
        $expected = 'you can make 14.50 m of fence with these materials';
        $input = 10;
        $input2 = 10;
        $input3 = 1.5;
        $input4 = 0.1;
        $case = calcLength($input, $input2, $input3, $input4);
        $this->assertEquals($expected, $case);
    }

    public function testCalcLengthFailure()
    {
        $expected = 'not enough posts or railings to make a fence';
        $input = 10;
        $input2 = -2;
        $input3 = 1.5;
        $input4 = 0.1;
        $case = calcLength($input, $input2, $input3, $input4);
        $this->assertEquals($expected, $case);
    }

    public function testCalcLengthMalf()
    {
        $expected = "enter x2 numbers";
        $input = 10;
        $input2 = 'cat';
        $input3 = 1.5;
        $input4 = 0.1;
        $case = calcLength($input, $input2, $input3, $input4);
        $this->assertEquals($expected, $case);
    }

    public function testCalcMaterialsSuccess()
    {
        $expected = 'You need 8 posts and 7 railings to cover 10.00 m';
        $input = 10;
        $input3 = 1.5;
        $input4 = 0.1;
        $case = calcMaterials($input, $input3, $input4);
        $this->assertEquals($expected, $case);
    }

    public function testCalcMaterialsFailure()
    {
        $expected = 'sorry can\'t have a negative number...';
        $input = -1;
        $input3 = 1.5;
        $input4 = 0.1;
        $case = calcMaterials($input, $input3, $input4);
        $this->assertEquals($expected, $case);
    }

    public function testCalcMaterialsMalf()
    {
        $expected = "enter a number";
        $input = 'cat';
        $input3 = 1.5;
        $input4 = 0.1;
        $case = calcMaterials($input, $input3, $input4);
        $this->assertEquals($expected, $case);
    }
    public function testCheckPostsAndRailingsSuccess()
    {
        $expected =  null;
        $input = '';
        $input2 = '';
        $input3 = 'cat';
        $case = checkPostsAndRailings($input, $input2, $input3);
        $this->assertEquals($expected, $case);
    }

    public function testcheckFenceSuccess()
    {
        $expected =  null;
        $input = '';
        $input3 = 'cat';
        $case = checkFence($input, $input3);
        $this->assertEquals($expected, $case);
    }
}

