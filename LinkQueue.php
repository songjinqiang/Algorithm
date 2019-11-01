<?php
/**
 * 链表队列
 * User: songjq
 * Date: 2019/11/1
 * Time: 16:24
 */
function myLoad( $class ) {
    $file = $class . '.php';
    if (is_file($file)) {
        require_once($file);
    }
}

spl_autoload_register( 'myLoad' );

class LinkQueue extends Linklist
{
    public $tail;    //尾节点

    /**
     * push
     * @param $value
     */
    public function push( $value ){

        if( $this->head->val==null ){
            $this->tail = new Node( $value );
            $this->head = $this->tail;
        }else{
            $this->tail->next =  new Node( $value );
            $this->tail = $this->tail->next;
        }
        $this->size++;
    }

    /**
     * pop
     * @return null
     * @throws \Exception
     */
    public function pop(){
        if( $this->size<=0 )
            throw new \Exception('超过链表范围');
        $val = $this->head->val;
        $this->head = $this->head->next;

        $this->size--;
        return $val;
    }

    /**
     * 查看队首
     */
    public function checkHead(){
        return $this->head->val;
    }

    /**
     * 查看队尾
     */
    public function checkEnd(){
        return $this->tail->val;
    }

    /**
     * toString
     */
    public function toString(){
        $r = [];
        while( $this->head ){
            $r[] = $this->head->val;
            $this->head = $this->head->next;
        }
        return implode('->',$r);
    }
}

$queue = new LinkQueue();
$queue->push(1);
$queue->push(3);
$queue->push(6);
$queue->push(9);

print_r($queue->pop());
print_r($queue->head);
print_r($queue->checkHead());
print_r($queue->checkEnd());
print_r($queue->toString());