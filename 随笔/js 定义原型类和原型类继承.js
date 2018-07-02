//定义Person原型属性，注意：首字母（建议必须）大写
    var Person = function(name) {
        this.name = name;
        this.canTalk = true;
    };
    //定义Person原型方法
    Person.prototype.say = function() {
        if (this.canTalk) {
            console.log('Hi, I am ' + this.name);
        }
    };
    //定义Teacher原型方法
    var Teacher = function(name, title) {
        //继承Person属性
        Person.call(this, name);
        this.title = title;
    };
    //定义Teacher原型方法 ， 同时继承Person原型方法
    Teacher.prototype = Object.create(Person.prototype);
    Teacher.prototype.talk=function () {
        if (this.canTalk) {
            console.log('Hi, I am ' + this.name+'. My work is a '+this.title);
        }
    }
    //定义Teacher原型的构造方法
    Teacher.prototype.constructor = Teacher;
    var xueyuan = new Teacher('xueyuan','teacher')
    xueyuan.talk();
    var weiquanju = new Person("weiquanju");
    weiquanju.say();