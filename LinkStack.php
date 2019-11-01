<?php
/**
 * 链表实现栈
 * User: songjq
 * Date: 2019/11/1
 * Time: 16:06
 */
function myLoad( $class ) {
    $file = $class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}

spl_autoload_register( 'myLoad' );

class LinklistStack extends Linklist
{
    /**
     * @param $value
     */
    public function push( $value ){
        $this->addFirst($value);
    }

    /**
     * @return mixed
     */
    public function pop(){
        $r = $this->head->next->val;
        $this->delete(0);
        return $r;
    }
}

$stack = new LinklistStack();
$stack->push(1);
$stack->push(3);
$stack->push(6);
$stack->push(9);
print_r($stack->pop());
print_r($stack->head);