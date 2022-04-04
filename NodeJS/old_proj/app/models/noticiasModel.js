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

    this.saveNoticia = (noticia, connection, callback) =>
    {
        connection.query('insert into noticias set ?',noticia,callback);
    }
    return this;

    
}