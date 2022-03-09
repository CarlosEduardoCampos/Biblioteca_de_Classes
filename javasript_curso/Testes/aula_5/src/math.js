class Math{
    sum = function sum(a, b,  callback)
    {
        setTimeout(() => {
            callback(a + b);
        }, 2500);
    };
}
module.exports = Math;