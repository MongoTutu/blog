define(['jquery'],function($){

    function hello(){
        console.log('Hello');
    }

    function world(){
        console.log('world');
    }

    return {
        hello : hello,
        world : world
    }

});
