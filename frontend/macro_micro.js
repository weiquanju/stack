setTimeout(function(){console.log(4)},20);
new Promise(function(resolve){
    console.log(1)
    resolve()
    console.log(2)
}).then(function(){
    console.log(3)
});
console.log(3);

setTimeout(function(){console.log(5)},10);
new Promise(function(resolve){
    console.log(7)
    setTimeout(()=>{
        resolve(100)
        console.log(8)

        new Promise(function(resolve){
            console.log(9)
            setTimeout(()=>{
                resolve(102)
                console.log(10)
            })
        }).then(function(){
            console.log(11)
        })

    },10)
}).then(function(){
    console.log(12)
});

// 1
// 2
// 3
// 7
// 3
// 4
// 5
// 8
// 9
// 12
// 10
// 11

