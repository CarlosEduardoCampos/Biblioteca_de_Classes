class Math{
    sum(a, b)
    {
        return a + b;
    }

    multiplay(a, b)
    {
        return a * b;
    }

    printSum(req, res, a, b)
    {
        res.load('index', a + b);

        return 0;
    }
}

module.exports = Math;