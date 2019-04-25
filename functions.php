<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 2019-03-16
 * Time: 14:06
 */

/**
 * checks if both vals are enough to make the smallest fence, if not print that no fence can be made. if so count the initial fence and loop over the remaining materials adding to the length until there is 0 posts or railings.
 *
 * @param $posts string number of posts
 *
 * @param $railings string number of railings
 *
 * @param $railL int length of railings
 *
 * @param $postL int length of posts
 *
 * @return string text and the length of fence to 2 decimal places
 */
function calcLength (string $posts, string $railings, string $railL, string $postL) : string {
    if (!is_numeric($posts) || !is_numeric($railings)){
        return "enter x2 numbers";
    }
    else if ($posts < 2 || $railings < 1) {
        $notEnoughPOrR = "not enough posts or railings to make a fence";
        return $notEnoughPOrR;
    } else {
        $length = ($railL + ($postL * 2));
        $posts -= 2;
        $railings--;
        while ($posts > 0 && $railings > 0) {
            $length += $railL + $postL;
            $posts--;
            $railings--;
        }
        $roundedLength = number_format((float)$length, 2, '.', '');
        return "you can make $roundedLength m of fence with these materials";
    }
}

/**
 * if the length of fence required is less than the smallest possible fence, return that only the smallest amount of materials is required. Else add 2 posts and railing to these values, remove the smallest fence length value from the length value and divide the remaining length by the smallest possible fence length. Round up and add these to the post and railings values.
 *
 * @param $length int length of the fence required
 *
 * @param $railL int length of railings
 *
 * @param $postL int length of posts
 *
 * @return string return the number of posts rails and the original length of fence that needs to be covered.
 */
function calcMaterials(string $length, string $railL, string $postL) : string {
    if (!is_numeric($length)){
        return "enter a number";
    }
    else if($length < 0){
        return "sorry can't have a negative number...";
    }
    else if ($length < ($railL + ($postL * 2))) {
        return "You'll only need 2 posts and a railing to cover the distance";
    } else {
        $newLength = $length - ($railL + ($postL * 2));
        $addToPostsAndRailings = ceil($newLength/($railL + $postL));
        $postys = ($addToPostsAndRailings + 2);
        $rails = ($addToPostsAndRailings + 1);
        $roundedLength = number_format((float)$length, 2, '.', '');
        return "You need $postys posts and $rails railings to cover $roundedLength m";
    }
}

/**
 * checks that both values are filled and then returns the string to display
 *
 * @param $val1 int number of posts
 *
 * @param $val2 int number of rails
 *
 * @param $valToDisplay string of result
 *
 * @return string returns the string to display
 */
function checkPostsAndRailings ($val1, $val2, $valToDisplay) {
    if(!empty($val1) || !empty($val2)) {
        return $valToDisplay;
    }
}

/**
 * checks that value is filled and then returns the string to display
 *
 * @param $val1 int length to display
 *
 * @param $valToDisplay string resulting string and value
 *
 * @return string returns the string to display
 */
function checkFence ($val1, $valToDisplay) {
    if(!empty($val1)) {
        return $valToDisplay;
    }
}
