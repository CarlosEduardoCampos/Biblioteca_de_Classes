function NoticiasDAO(connection)
{
    this._connection = connection;
}

NoticiasDAO.prototype.getNoticias = function(callback)
{
    this._connection.query('select * from noticias', callback);
}

NoticiasDAO.prototype.getNoticia = function(callback)
{
    this._connection.query('select * from noticiasDAO where idNoticiasDAO = 1', callback);
}

NoticiasDAO.prototype.saveNoticia = function(noticia, callback)
{
    this._connection.query('Insert into noticiasDAO set ?', noticia, callback);
}

module.exports = function()
{
    return NoticiasDAO;
}

/*module.exports = function()
{
    this.getNoticiasDAO = function(callback)
    {
        this._connection.query('select * from noticiasDAO', callback);
    }
    
    this.getNoticia = function(callback)
    {
        this._connection.query('select * from noticiasDAO where idNoticiasDAO = 1', callback);
    }
    
    this.saveNoticia = function(noticia, callback)
    {
        this._connection.query('Insert into noticiasDAO set ?', noticia, callback);
    }
    return this;
}*/