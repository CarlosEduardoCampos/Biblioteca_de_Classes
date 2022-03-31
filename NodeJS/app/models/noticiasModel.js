module.exports = function()
{
    this.getNoticias = (connection, callback) =>
    {
        connection.query('select * from noticias',callback);
    }

    this.getNoticia = (connection, callback) =>
    {
        connection.query('select * from noticias where idNoticias = 1',callback);
    }
    return this;
}