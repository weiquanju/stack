<?php

interface SuperModuleInterface{
    public function activate(array $target);
}

class Superman
{
    protected $module;

    /**
     * Superman constructor.
     * @param SuperModuleInterface $module
     * 通过构造器 注入依赖
     */
    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }

    public function show(array $target){

        $this->module->activate($target);
    }
}

class PowerA implements SuperModuleInterface
{
    public function activate(array $target)
    {
        echo '<pre>'. __METHOD__;
        print_r(func_get_args());
    }
}

class PowerB implements SuperModuleInterface
{
    public function activate(array $target)
    {
        echo '<pre>'. __METHOD__;
        print_r(func_get_args());
    }
}



class Container
{
    protected $binds;

    protected $instances;

    /**
     * @param $abstract
     * @param $concrete
     * 把代词 绑定到容器里,为后续make
     */
    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    /**
     * @param $abstract
     * @param array $parameters
     * @return mixed
     * 创建对象
     */
    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        // 把容器对象$this,放到参数数组第一个元素。为call_user_func_array使用
        array_unshift($parameters, $this);
        
        // 这里$this->binds[$abstract] 绑定的闭包函数, 执行函数参数是$parameters
        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}


// 创建一个容器（后面称作超级工厂）
$container = new Container;


// 向该 超级工厂添加超能力模组的生产脚本
$container->bind('powerA', function($container) {
    return new PowerA;
});

// 同上
$container->bind('powerB', function($container) {
    return new PowerB;
});


// 向该 超级工厂添加超人的生产脚本
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
});



echo "<pre>";

// 开始启动生产
$superman_1 = $container->make('superman', ['powerA']);
$superman_1->show(['a' => 1]);

$superman_2 = $container->make('superman', ['powerB']);
$superman_2->show(['b' => 1]);