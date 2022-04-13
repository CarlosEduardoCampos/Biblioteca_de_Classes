module.exports = function()
{
    this.getNoticias = function(connection, callback)
    {
        connection.query('select * from noticias', callback);
    }
    
    this.getNoticia = function(connection, callback)
    {
        connection.query('select * from noticias where idNoticias = 1', callback);
    }
    
    this.saveNoticia = function(noticia, connection, callback)
    {
        connection.query('Insert into noticias set ?', noticia, callback);
    }
    return this;
}